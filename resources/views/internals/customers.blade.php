

@extends("layout.main")
@section('title', "Customer List")
@section("content")

<h1>Customer List</h1>
    <form class="form-signin" action="/customers" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Add a customer</h1>
        <label for="name" class="sr-only">Name</label>
        <p class="alert-danger">{{$errors->first('name')}}</p>
        <input type="text" class="form-control" name="name" placeholder="Customer name" value="{{old('name')}}" autofocus>

<br>
        <label for="email" class="sr-only">Email</label>
        <p class="alert-danger">{{$errors->first('email')}}</p>
        <input type="text" class="form-control" name="email" placeholder="Customer email" value="{{old('email')}}" autofocus>
{{--        <label for="inputPassword" class="sr-only">Password</label>--}}
{{--        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
{{--        <div class="checkbox mb-3">--}}
{{--            <label>--}}
{{--                <input type="checkbox" value="remember-me"> Remember me--}}
{{--            </label>--}}
{{--        </div>--}}
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Customer</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
        @csrf
    </form>

    <div class="">
        <ul>
            @foreach ($customers as $customer)
                <li>{{$customer->name}}({{$customer->email}})</li>
            @endforeach
        </ul>
    </div>
@endsection