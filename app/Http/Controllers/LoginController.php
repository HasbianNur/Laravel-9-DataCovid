<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "Laravel | Login"
        ]);
    }
    public function actionlogin(Request $request)
    {
        // return $request;
        $data = [
            // 'nama'     => $request->input('nama'),
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        } else {
            $request->session()->all('error', 'Email atau Password Salah');
            // return 'test';
        }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('login');
    }

    public function registrasi()
    {
        return view('registrasi', [
            'title' => 'Laravel | Registrasi'
        ]);
    }
}
