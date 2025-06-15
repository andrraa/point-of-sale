<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.index');
    }

    public function login(LoginRequest $request)
    {
        
    }
}
