<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForExampleRequest;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FormController extends Controller
{

    public function create()
    {
        return view('welcome');
    }

    public function checkValidation(ForExampleRequest $request)
    {

       $success ='Dữ liệu xác thực thành công';
       return view('welcome',compact('success'));
    }
}
