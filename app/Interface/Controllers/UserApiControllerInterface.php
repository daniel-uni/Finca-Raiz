<?php

namespace App\Interface\Controllers;

use App\Http\Requests\User\RegisterRequest;
use Illuminate\Http\JsonResponse;

interface UserApiControllerInterface
{
    public function register(RegisterRequest $request): JsonResponse;
}