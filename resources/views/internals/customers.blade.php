

@extends("layout.main")

@section("content")
    <div class="">
        <ul>
            @foreach ($customers as $customer)
                <li>{{$customer}}</li>
            @endforeach
        </ul>
    </div>
@endsection