<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome23');
        // $posts = \App\Models\test::orderBy('id', 'ASC')->get();
        // $data = compact('posts');
        // return view('frontend.index',$data);
    }
}
