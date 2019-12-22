@extends('layouts.app')

@section('title', "Edit Customer ". $customer->name)
@section("content")
    <form class="form-signin" action="/customers/{{$customer->id}}" method="POST">
        @method('PATCH')
        <h1 class="h3 mb-3 font-weight-normal">Add a customer</h1>
        @include('customers.form')
    </form>

@endsection