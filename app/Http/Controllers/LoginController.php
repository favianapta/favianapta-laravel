<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function slogin(Request $request)
    {
        $validated = $request->validate([
            // 'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Login Gagal',
        ]);
        //])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
