<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $activeCustomers = Customer::where('active',1)->get();
        $inActiveCustomers = Customer::where('active',0)->get();
        return view("internals.customers", compact('activeCustomers', 'inActiveCustomers'));
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required|email',
            'active'=>'required'
            ]);
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();
        return back();
        //dd(request('name'));
    }
}
