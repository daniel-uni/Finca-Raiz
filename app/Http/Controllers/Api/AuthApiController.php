<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHttp;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticateRequest;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthApiController extends Controller
{
    public function authenticate(AuthenticateRequest $request)
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

    public function getAuthenticatedUser()
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
}
