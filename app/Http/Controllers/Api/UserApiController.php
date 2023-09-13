<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHttp;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Interface\Controllers\UserApiControllerInterface;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use JWTAuth;

class UserApiController extends Controller implements UserApiControllerInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $validate = $this->userRepository->validateUserExist($request['email']);
        $response = null;
        if (!$validate) {
            $user = $this->userRepository->createUser($request);
            $token = JWTAuth::fromUser($user);
            $response = ResponseHttp::responseSuccess(compact('user', 'token'), 201);
        } else {
            $response = ResponseHttp::responseError("Este usuario ya existe", 406);
        }
        return $response;
    }
}
