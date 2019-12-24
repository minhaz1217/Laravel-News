@extends('layouts.app')

@section('title', "Customer List")
@section("content")
<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <a href="/customers/create">Add New Customer</a>
    </div>
</div>

@foreach( $customers as $customer)
    <div class="row">
        <div class="col-2">
            {{$customer->id}}
        </div>
        <div class="col-2">
            <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
        </div>
        <div class="col-2">
            {{$customer->company->name}}
        </div>
        <div class="col-4">
            {{$customer->email}}
        </div>
        <div class="col-2">
            {{$customer->active}}
        </div>
    </div>
@endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-5">
            {{$customers->links()}}
        </div>
    </div>
@endsection