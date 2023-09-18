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
        $user = new User();
        $user[GlobalValue::USER_NAME] = $request->name;
        $user[GlobalValue::USER_EMAIL] = $request->email;
        $user[GlobalValue::USER_PASSWORD] = Hash::make($request->password);
        $user[GlobalValue::USER_VALIDATE] = false;
        $user[GlobalValue::USER_ROL] = 2;
        $user->save();
        return $user;
        
        // return $this->model::create([
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'password' => Hash::make($request->get('password'))
        // ]);
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