<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function register(array $data)
    {
        return User::create($data);
    }

    public function login(array $data)
    {
        return Auth::attempt($data);
    }
}
