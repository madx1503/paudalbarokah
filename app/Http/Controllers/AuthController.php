<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Memproses data dari form login
    public function authenticate(Request $request)
    {
        // 1. Validasi inputan form
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Cek ke database (tabel users)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Kalau sukses, arahkan ke dashboard
            return redirect()->intended('/dashboard');
        }

        // Kalau gagal, kembalikan ke halaman login bawa pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang dimasukkan salah.',
        ])->onlyInput('email');
    }

    // Fungsi untuk Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}