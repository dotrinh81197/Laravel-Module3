<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function validationEmail(Request $request)
    {
        $email = $request->email;

        $isemail = true;

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isemail = false;
        }

        return view('index', compact('isemail'));
    }
}
