@extends('layouts.main')
@section('content')
<table class="table table-dark w-50 mx-auto mt-5 text-center">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td><a href="{{route('details',['id'=>$user->id,'name'=>$user->name])}}">{{$user->username}}</a></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection