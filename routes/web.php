<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use App\Models\test;

Route::get('/test', function () {
    return view('test.test');
})->name('test');

Route::get('/',['as'=>'home','uses'=>
'HomeController@home']);

//-*****TEST*****--//
// Route::get('/test',['as'=>'test','uses'=>
// 'HomeController@home']);

// Route::get('/{id}',function($id){
//     $posts = test::all();
//     //echo $posts->unit1;
//     foreach($posts as $post){
//         echo $post->unit1."<br/><br/>";
//         echo $post->fica."<hr/>";
//         //return $post->unit1;
//     };
// });