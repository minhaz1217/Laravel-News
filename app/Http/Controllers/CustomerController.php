<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view("customers.index", compact('customers'));
    }

    public function create(){

        $companies = Company::all();
        return view("customers.create", compact('companies'));
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required|email',
            'active'=>'required',
            'company_id' =>'required'
            ]);
        Customer::create($data);
        return redirect('/customers');
    }
    public function show($customer){
        $customer = Customer::where('id', $customer)->firstOrFail();
        return view("customers.show", compact('customer'));
    }
}
