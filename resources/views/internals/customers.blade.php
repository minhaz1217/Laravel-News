

@extends("layout.main")

@section("content")


    <form class="form-signin" action="/customers" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Add a customer</h1>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Customer name" required autofocus>
{{--        <label for="inputPassword" class="sr-only">Password</label>--}}
{{--        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
{{--        <div class="checkbox mb-3">--}}
{{--            <label>--}}
{{--                <input type="checkbox" value="remember-me"> Remember me--}}
{{--            </label>--}}
{{--        </div>--}}
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Customer</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
        @csrf
    </form>

    <div class="">
        <ul>
            @foreach ($customers as $customer)
                <li>{{$customer->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection