<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Validasi
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Coba login
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => 'username atau password salah.',
            ]);
        }

        //  Regenerate session
        $request->session()->regenerate();

        //  Arahkan sesuai role
        // if (Auth::user()->role === 'admin') {
        //     return redirect()->intended('admin/dashboard');
        // }

        return redirect()->intended('admin/dashboard');
    }

    /**
     * Proses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        //  Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
