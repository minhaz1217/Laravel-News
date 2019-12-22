@extends("layout.main")
@section('title', "Details for ".$customer->name)
@section("content")
<div class="row">

    <div class="col-12">
        <h1>Details for {{$customer->name }}</h1>
        <h2>Name: {{$customer->name}}</h2>
        <h2>Email: {{$customer->email}}</h2>
        <h2>Company: {{$customer->company->name}}</h2>
        <h2>Active: {{$customer->active}}</h2>
    </div>

</div>


@endsection