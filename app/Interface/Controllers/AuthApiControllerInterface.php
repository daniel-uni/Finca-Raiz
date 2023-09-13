<?php

namespace App\Interface\Controllers;

use App\Http\Requests\Auth\AuthenticateRequest;
use App\Http\Requests\Auth\ResetPassword;
use Illuminate\Http\JsonResponse;

interface AuthApiControllerInterface
{
    public function authenticate(AuthenticateRequest $request): JsonResponse;
    public function getAuthenticatedUser(): JsonResponse;
    public function resetPassword(ResetPassword $request): JsonResponse;
}