<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about(){
        return view('about', ['first_name'=>"Minhaz" , "last_name"=>"Khan"]);
    }
    public function about2(){
        $first_name = "Minhaz2";
        $last_name = "Khan2";
        return view('about',compact('first_name', 'last_name' ));
    }
}
