<?php

// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::check() || Auth::user()->role !== 'admin') {
    //         return redirect()->route('admin.login'); // Ganti dengan route login admin Anda
    //     }

    //     return $next($request);
    // }
}

