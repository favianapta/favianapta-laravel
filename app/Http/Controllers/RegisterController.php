<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function sregister(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd('Berhasil');
        $validated['password']=bcrypt($validated['password']);
        User::create($validated);
        $request->session()->flash('success', 'Data Tersimpan');
        return redirect('/login');
    }
}
