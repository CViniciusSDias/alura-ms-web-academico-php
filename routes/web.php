<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

$router->post('/login', function (Request $request) use ($router) {
    $email = $request->json('email');
    $senha = $request->json('senha');

    $user = User::where('email', $email)->first();
    if (!password_verify($senha, $user?->password ?? '')) {
        return response('Usuário ou senha inválidos', 401);
    }

    return response(JWT::encode(['email' => $user->email], env('JWT_KEY')));
});
