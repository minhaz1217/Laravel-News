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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello", function(){
    return "Hello World";
});
Route::get("/user/{id}/{name?}", function($id, $name = "Aryan"){
    return "Your id is: ".$id . " and your name is: " . $name;
})->where('id', '[0-9]+');
Route::get("/hellocontroller", "HelloController@hello");
Route::get("/addcontroller", "AddController@index");
Route::get("/about", ['uses' => 'AboutController@about', 'as' =>'about']);
Route::get("/about2", ['uses' => 'AboutController@about2', 'as' =>'about']);
Route::get("/customer", 
function(){
    $customers = [
        'Minhazul',
        'Hayat',
        'Khan'
    ];
    return view("internals.customers", ['customers'=> $customers]);
}
    );