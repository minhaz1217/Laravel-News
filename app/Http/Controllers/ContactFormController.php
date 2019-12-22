<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        //send the email
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        //session()->flash('message', "Message Sent Successfully.");

        return redirect('/contact')->with('message', 'Message Sent Successfully.');
    }
}
