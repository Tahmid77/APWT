@extends('layouts.app')
@section('contain')


<form action="" method="post" class="w-50 mx-auto mt-5">
{{@csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" value="{{old('name')}}" name="name"class="form-control" > </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product ID</label>
    <input type="text" name="id" value="{{old('id')}}"class="form-control" > </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" value="{{old('price')}}" name="price"class="form-control" > </br>
    @error('price')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
  </div>
  <button  type="submit" value="Create" class="btn btn-primary">Submit</button>
</form>
@endsection

