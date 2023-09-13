<?php

namespace App\Repositories;

use App\Models\Resset;
use DB;

class RessetPasswordRepository
{
    public function createResset(string $email): string
    {
        $resset = Resset::create([
            'email' => $email,
            'token' => strval($this->ramdom())
        ]);
        return $resset['token'];
    }

    private function ramdom(): int
    {
        return mt_rand(100000, 999999);
    }
    
    public function getRecoveryByEmailAndCode(string $email, string $code): Resset
    {
        return Resset::where('email', $email)->where('token', $code)->first();
    }

    public function getRecoveryByEmail(string $email): Resset
    {
        return Resset::where('email', $email)->first();
    }
}