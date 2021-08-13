<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CorsMiddleware
{
    public function handle(Request $request, callable $next)
    {
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'POST, GET, PATCH, OPTIONS',
            'Access-Control-Allow-Headers' => 'Content-Type, Authorization'
        ];

        if ($request->isMethod('OPTIONS')) {
            return response('', 200, $headers);
        }

        /** @var Response $response */
        $response = $next($request);

        foreach ($headers as $header => $value) {
            $response->header($header, $value);
        }

        return $response;
    }
}
