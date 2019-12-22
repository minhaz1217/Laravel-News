@extends("layout.main")
@section('title', "Add Customer")
@section("content")
<form class="form-signin" action="/customers" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Add a customer</h1>
    @include('customers.form')
</form>

@endsection