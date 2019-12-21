<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $activeCustomers = Customer::active()->get();
        $inActiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        return view("internals.customers", compact('activeCustomers', 'inActiveCustomers', 'companies'));
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required|email',
            'active'=>'required',
            'company_id' =>'required'
            ]);

        Customer::create($data);
//        $customer = new Customer();
//        $customer->name = request('name');
//        $customer->email = request('email');
//        $customer->active = request('active');
//        $customer->save();
        return back();
        //dd(request('name'));
    }
}
