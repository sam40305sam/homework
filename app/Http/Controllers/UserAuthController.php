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
        $rules=[
            'Nickname'=>[
                'required',
                'max:10',
            ],
            'email'=>[
                'required',
                'max:150',
                'email',
            ],
            'password'=>[
                'required',
                'same:password_confirmation',
                'min:6',
            ],
            'password_confirmation'=>[
                'required',
                'min:6',
            ],
        ];
        $validator=Validator::make($input, $rules);
        if($validator->fails()){
            return redirect('/user/auth/sign-up')
                ->withErrors($validator);
        }
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
