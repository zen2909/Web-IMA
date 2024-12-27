<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AdminController;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }

    public function handle($request, \Closure $next, ...$guards)
    {
        if (auth()->guest()) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}

