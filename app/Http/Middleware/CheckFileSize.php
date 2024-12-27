<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\PostTooLargeException;

class CheckFileSize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasFile('images')) {
            $maxSize = 20 * 1024 * 1024; // 20MB dalam bytes
            $totalSize = 0;

            foreach ($request->file('images') as $file) {
                $totalSize += $file->getSize();
            }

            if ($totalSize > $maxSize) {
                return redirect()->back()->withErrors('Total ukuran file terlalu besar. Maksimal 20MB.');
            }
        }

        return $next($request);
    }
}