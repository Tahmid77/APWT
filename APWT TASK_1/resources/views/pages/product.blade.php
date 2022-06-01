@extends('layouts.app')
@section('contain')
<table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
            </tr>
        @endforeach
</table>
    
@endsection