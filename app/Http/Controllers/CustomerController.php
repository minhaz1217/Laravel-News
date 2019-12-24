<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use App\Events\NewCustomerRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){
        $customers = Customer::with('company')->paginate(15);
        return view("customers.index", compact('customers'));
    }

    public function create(){

        $companies = Company::all();
        $customer = new Customer();
        return view("customers.create", compact('companies','customer'));
    }
    public function store(){
        $this->authorize('create', Customer::class);
        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required|email',
            'active'=>'required',
            'company_id' =>'required'
            ]);
        $customer = Customer::create($data);
        event(new NewCustomerRegisteredEvent($customer));

        return redirect('/customers');
    }
    public function show(Customer $customer){
        //$customer = Customer::where('id', $customer)->firstOrFail();
        return view("customers.show", compact('customer'));
    }
    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit',compact('customer', 'companies'));
    }
    public function update(Customer $customer){

        $data = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required|email',
            'active'=>'required',
            'company_id' =>'required'
        ]);
        $customer->update($data);
        return redirect('/customers/'.$customer->id);
    }
    public function destroy(Customer $customer){

        $this->authorize('delete', $customer);
        $customer->delete();
        return redirect('/customers');
    }
}
