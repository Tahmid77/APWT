@extends('layouts.app')
@section('contain')
<table class="table table-light table-striped mt-5 w-50 text-center">
        <tr class="table-dark">
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