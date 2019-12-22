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
        <h2><a href="/customers/{{$customer->id}}/edit">Edit</a> </h2>
        <form action="/customers/{{$customer->id}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
    </div>

</div>


@endsection