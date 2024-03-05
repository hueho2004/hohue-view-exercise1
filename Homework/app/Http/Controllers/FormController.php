<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function post(Request $request){
       return back()->withInput($request->only('username'));
        /*$password = $request->input('password') ?? 'hue123';
        dd($request->input('username'), $password);*/
    }
}
