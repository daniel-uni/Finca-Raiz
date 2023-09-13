<?php

namespace App\Http\Controllers\Api;

use App\Global\GlobalValue;
use App\Helpers\ResponseHttp;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticateRequest;
use App\Http\Requests\Auth\ResetPassword;
use App\Http\Requests\CodeRequest;
use App\Http\Requests\PasswordRequest;
use App\Interface\Controllers\AuthApiControllerInterface;
use App\Mail\SendResset;
use App\Repositories\RessetPasswordRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use JWTAuth;
use Mail;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthApiController extends Controller implements AuthApiControllerInterface
{
    protected $userRepository;
    protected $ressetPasswordRepository;

    public function __construct(UserRepository $userRepository, RessetPasswordRepository $ressetPasswordRepository)
    {
        $this->userRepository = $userRepository;
        $this->ressetPasswordRepository = $ressetPasswordRepository;
    }

    public function authenticate(AuthenticateRequest $request): JsonResponse
    {
        $credentials = $request->only('email','password');
        $token = JWTAuth::attempt($credentials);
        $response = null;
        try {
            if (!$token) {
                $response = ResponseHttp::responseError("Credenciales Invalidas", 400);
            } else {
                $response = ResponseHttp::responseSuccess(['token' => $token], 200);
            }
        } catch (JWTException $e) {
            $response = ResponseHttp::responseError("Falla al crear el token $e",500);
        }
        return $response;
    }

    public function getAuthenticatedUser(): JsonResponse
    {
        $user = JWTAuth::parseToken()->authenticate();
        $response = null;
        try {
            if (!$user) {
                $response = ResponseHttp::responseError('Usuario no encontrado', 404);
            } elseif ($user) {
                $response = ResponseHttp::responseSuccess(compact('user'), 200);
            }
        } catch (TokenExpiredException $e) {
            $response = ResponseHttp::responseError("Token Expirado", 403);
        } catch (TokenInvalidException $e) {
            $response = ResponseHttp::responseError("Token Invalido", 401);
        } catch (JWTException $e) {
            $response = ResponseHttp::responseError("Token no encontrado",400);
        }
        return $response;
    }

    public function resetPassword(ResetPassword $request): JsonResponse
    {
        $response = null;
        $user = $this->userRepository->validateUserExist($request->email);
        if ($user) {
            $code = $this->ressetPasswordRepository->createResset($request->email);
            $this->sendEmail($request->email, $code);
            $response = ResponseHttp::responseSuccess(['message' => "resset of password success"], 200);
        } elseif (!$user) {
            $response = ResponseHttp::responseError("Token no encontrado",400);
        }
        return $response;
    }

    public function validateCodeResset(CodeRequest $request):JsonResponse
    {
        $recovery = $this->ressetPasswordRepository->getRecoveryByEmailAndCode($request['email'], $request['code']);
        if ($recovery) {
            $response = ResponseHttp::responseSuccess(['message' => "resset of password success"], 200);
        } else {
            $response = ResponseHttp::responseError("Codigo o usuario no valido",400);
        }
        return $response;
    }

    public function updatePasswordResset(PasswordRequest $request):JsonResponse
    {
        $user = $this->userRepository->getUserByEmail($request['email']);
        if ($user) {
            $recovery = $this->ressetPasswordRepository->getRecoveryByEmail($request['email']);
            $recovery->delete();
            $this->userRepository->updatePassword($user, $request['password']);
            $response = ResponseHttp::responseSuccess(['message' => "resset of password success"], 200);
        } else {
            $response = ResponseHttp::responseError("Codigo o usuario no valido",400);
        }
        return $response;
    }

    private function sendEmail(string $email, string $code)
    {
        $user = $this->userRepository->getUserByEmail($email);
        Mail::to($email)->send(new SendResset($code, $user[GlobalValue::USER_NAME]));
    }
}
