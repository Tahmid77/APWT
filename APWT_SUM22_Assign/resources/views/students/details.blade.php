@extends('layouts.main')
@section('content')
    <center>
    <p>Name: {{$users[0]->name}}</p>
    <p>Username: {{$users[0]->username}}</p>
    <p>Email: {{$users[0]->email}}</p>
    </center>
@endsection