@extends('layouts.app')

@section('title', "Customer List")
@section("content")
<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        @can('create', \App\Customer::class)
            <a href="/customers/create">Add New Customer</a>
        @endcan
    </div>
</div>

@foreach( $customers as $customer)
    <div class="row">
        <div class="col-2">
            {{$customer->id}}
        </div>
        <div class="col-2">
            @can('view', $customer)
            <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
            @endcan
            @cannot('view', $customer)
                {{$customer->name}}
                @endcan
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