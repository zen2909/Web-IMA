<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Show login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt login dengan username atau email
        $loginField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [
            $loginField => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            return $this->authenticated($request, Auth::user());
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    /**
     * Redirect user after login based on role
     */
    protected function authenticated(Request $request, $user)
    {
        // Cek role user menggunakan Spatie
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('anggota-it')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('ketua')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('wakil-ketua')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('kepala-divisi')) {
            return redirect()->route('admin.dashboard');
        }

        // Default redirect
        return redirect()->route('admin.dashboard');
    }

    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}