@extends('layouts.main')
@section('content')
<form action="{{route('student.registration.submit')}}" method="post" class="w-50 mx-auto mt-3">
    {{@csrf_field()}}
    <h1 class="text-center">Register</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" value="{{old('name')}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('name')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" value="{{old('username')}}" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('username')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
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
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
        <input type="password" value="{{old('conf_password')}}" name="conf_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('conf_password')
            <span class="text-danger">{{$message}}</span><br>
        @enderror
    </div>
    <div class="text-center">
        <input class="btn btn-primary w-100" type="submit" value="Register">
    </div>
</form>
@endsection
