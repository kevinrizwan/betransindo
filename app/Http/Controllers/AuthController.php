<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->role == 'timacc') {
                return redirect()->intended('timacc');
            }
        }
        return view('validation.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        $ceklogin = $request->only('username', 'password');

        if (Auth::attempt($ceklogin)) {
            $user = Auth::user();
            if ($user->role == 'staff') {
                return redirect()->intended('staff');
            } elseif ($user->role == 'penonton') {
                return redirect()->intended('penonton');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
