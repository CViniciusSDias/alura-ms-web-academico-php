<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function login(Request $request): Response
    {
        $email = $request->json('email');
        $senha = $request->json('senha');

        $user = User::where('email', $email)->first();
        if (!password_verify($senha, $user?->password ?? '')) {
            return response('Usuário ou senha inválidos', 401);
        }

        return response(JWT::encode(['nome' => $user->name, 'email' => $user->email], env('JWT_KEY')));
    }
}
