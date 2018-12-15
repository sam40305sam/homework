<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function watch(Request $request){
        if($request->ip!="150.117.10.27"&&$request->ip!="127.0.0.1"){
            $ip = $request->ip;
            $os = $request->os;
            $DeviceClass = $request->DeviceClass;
            $browser = $request->browser;
            $name = $request->name;
            $post= new \App\Models\watch; //定義變數
            $post->create([
                'ip'=>$ip,
                'os'=>$os,
                'deviceclass'=>$DeviceClass,
                'browser'=>$browser,
                'name'=>$name
            ]); //增加資料
        }
    }
}
