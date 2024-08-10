<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (User::count() == 0) {
            return redirect()->route('login')->with('error', 'No Existe Usuarios Rgiestrados');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'num_doc' => ['required', 'num_doc'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'num_doc' => 'Las Credenciales no coinciden con nuestro Registro',
        ])->onlyInput('num_doc');
    }
}
