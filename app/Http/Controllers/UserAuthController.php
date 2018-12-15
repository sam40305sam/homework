<?php

namespace App\Http\Controllers;

use Validator;

class UserAuthController extends Controller
{
    public function signInPage(){
        return view('auth.signIn');
    }

    public function signInProcess(){
        $input=request()->all();
        
        return view('auth.signIn');
    }
}
