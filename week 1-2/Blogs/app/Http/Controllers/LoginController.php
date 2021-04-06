<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('login.loginPage');
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->input('email'),
            'password' => $request->password,
        ];

        if (Auth::attempt($user)) {
            return redirect()->route('blog.index');
        } else {
            
            return redirect()->route('loginPage')->with('loginError', 'Email or Password wrong');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginPage');
    }
}
