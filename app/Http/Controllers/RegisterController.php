<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {
        return view('pages.register');
    }

    public function getData(Request $request)
    {
        request()->all();
        dd(request()->all());
        return view('register');
    }
}
