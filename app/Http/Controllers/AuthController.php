<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['login' => 'Email atau Password salah']);
        }
    }

    public function logout(Request $request)
    {
        if (!$request->isMethod('post')) {
            return back();
        }
        Auth::logout();
        Session::flash('logout-success', 'Anda berhasil logout');
        return redirect()->route('login');
    }
}
