<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
    protected function redirectTo($request)
{
    if ($request->expectsJson()) {
        return response()->json(['message' => 'CSRF token expired'], 419);
    }

    return route('login');
}
}
