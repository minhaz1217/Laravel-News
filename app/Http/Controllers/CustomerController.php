<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customers = [
            'Minhazul',
            'Hayat',
            'Khan'
        ];
        return view("internals.customers", ['customers'=> $customers]);
    }
}
