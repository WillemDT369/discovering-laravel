<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function formSubmit(Request $request)
    {
        print_r($request->input());
    }


    public function getData(Request $request)
    {
        return $request->input();
    }
}
