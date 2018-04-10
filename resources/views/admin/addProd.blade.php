@extends('layouts.navbar')

@section('title','Add new product');

@section('content')
    <h3>Adding new product</h3>
    <form action="{{route('admin.saveProd')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="number" name="category" class="form-control" placeholder="Category id">
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Product title">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Product description"></textarea>
        </div>

        <div class="form-group">
            <input type="text" name="img" class="form-control" placeholder="Image name">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
    <button class="btn btn-primary" onclick="window.location.href='/view'">Back to view</button>
@endsection