<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(StoreRegisterRequest $request)
    {
        $data = $request->validated();

        $this->authService->register($data);

        return redirect()->route('posts.index');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function login(StoreLoginRequest $request)
    {
        $data = $request->validated();

        $this->authService->login($data);

        return redirect()->route('posts.index');
    }

    public function logout()
    {
        $this->authService->logout();

        return redirect()->route('posts.index');
    }
}
