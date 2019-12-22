@extends("layout.main")

@section('title', "Contact us")
@section("content")
    <br><br>
    <div class="row">
        <div class="col-2"></div>
    <div class="col-8">
        <form action="/contact" method="POST">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name="name" placeholder="Minhaz" value="{{old('name')}}">
                <div class="alert-danger">
                    {{$errors->first('name')}}
                </div>

            </div>

            <div class="mb-3">
                <label for="email">Email</label>

                <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com" value="{{old('email')}}">
                <div class="alert-danger">
                    {{$errors->first('email')}}
                </div>
            </div>
            <div class="mb-3">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control">{{old('message')}}</textarea>
                <div class="alert-danger">
                    {{$errors->first('message')}}
                </div>
            </div>
            @csrf
            <button class="btn btn-primary btn-lg btn-block" type="submit">Email</button>
        </form>
    </div>
        <div class="col-2"></div>
    </div>
@endsection