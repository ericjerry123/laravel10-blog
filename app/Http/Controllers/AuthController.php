<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Services\AuthService;

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
}
