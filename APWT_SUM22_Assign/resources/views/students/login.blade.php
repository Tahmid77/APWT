@extends('layouts.main')
@section('content')
<form action="{{route('student.login.submit')}}" method="post" class="w-50 mx-auto mt-4">
    {{@csrf_field()}}
    @if(Session::has('msg'))
    <center><span  class="alert alert-info text-center">{{Session::get('msg')}}</span></center>
    @endif
    <h1 class="text-center mt-2">Login</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" value="{{old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" value="{{old('password')}}" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('password')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
    <div class="text-center">
        <input class="btn btn-primary w-100" type="submit" value="Login">
    </div>
</form>
@endsection
