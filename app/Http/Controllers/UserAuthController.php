<?php

namespace App\Http\Controllers;

class UserAuthController extends Controller
{
    public function signInPage(){
        $binding = [
            'title' => '登入',
        ];
        return view('auth.signIn', $binding);
    }
}
