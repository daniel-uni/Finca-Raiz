<?php

namespace App\Repositories;

use App\Global\GlobalValue;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Hash;

class UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser(RegisterRequest $request): User
    {
        return $this->model::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);
    }

    public function validateUserExist(string $email): bool
    {
        return $this->model::whereEmail($email)->exists();
    }

    public function getUserByEmail(string $email): User
    {
        return $this->model::whereEmail($email)->first();
    }

    public function updatePassword(User $user, $password):bool
    {
        $user[GlobalValue::USER_PASSWORD] = Hash::make($password);
        $user->save();
        return true;
    }
}