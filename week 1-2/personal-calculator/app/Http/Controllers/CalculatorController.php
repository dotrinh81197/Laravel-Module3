<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getOperand(Request $request)
    {

        $operand = $request->operand;
        $value =  session([
            '1' => $operand,
        ]);
        return view('index', compact('operand', 'value'));
    }

    public function getOperator(Request $request)
    {
        $operator = $request->operator;
        return view('index', compact('operator'));
    }

    public function getSecondaryValue()
    {
        # code...
    }
}
