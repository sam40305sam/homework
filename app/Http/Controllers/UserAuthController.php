<?php

namespace App\Http\Controllers;

use Validator;

class UserAuthController extends Controller
{
    //sign-up
    public function signUpPage(){
        return view('auth.signUp');
    }

    public function signUpProcess(){
        $input=request()->all();

        var_dump($input);
    }

    //sign-in
    public function signInPage(){
        return view('auth.signIn');
    }

    public function signInProcess(){
        $input=request()->all();

        var_dump($input);
    }
}
