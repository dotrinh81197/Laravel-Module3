<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'number' => 'required|numeric',
        ]);
        echo 'xac thuc thanh cong';
    }
}
