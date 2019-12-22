
<label for="name" class="sr-only">Name</label>
<p class="alert-danger">{{$errors->first('name')}}</p>
<input type="text" class="form-control" name="name" placeholder="Customer name" value="{{old('name')??$customer->name}}" autofocus>

<br>
<label for="email" class= "sr-only">Email</label>
<p class="alert-danger">{{$errors->first('email')}}</p>
<input type="text" class="form-control" name="email" placeholder="Customer email" value="{{old('email')??$customer->email}}" autofocus>
{{--        <label for="inputPassword" class="sr-only">Password</label>--}}
{{--        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
{{--        <div class="checkbox mb-3">--}}
{{--            <label>--}}
{{--                <input type="checkbox" value="remember-me"> Remember me--}}
{{--            </label>--}}
{{--        </div>--}}
<br>
<div class="form-group">
    <select name="active" class="form-control">
        <option value="" disabled>Select Customer Status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected':''}}>{{$activeOptionValue}}</option>
        @endforeach
    </select>
</div>        <br>
<div class="form-group">
    <select name="company_id" class="form-control">
        <option value="" disabled>Select Customer Company</option>
        @foreach($companies as $company)
            <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected':''}} >{{$company->name}}</option>
        @endforeach
    </select>
</div>
<br>
<button class="btn btn-lg btn-primary btn-block" type="submit">Add Customer</button>
<p class="mt-5 mb-3 text-muted">&copy; 2019</p>
@csrf