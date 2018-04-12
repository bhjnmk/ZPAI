@extends('layouts.categories')

@section('content')
    <h3>Edit product (id = </h3>
    <form action="{{route('admin.saveProd')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <select name="category" class="form-control" style="height: auto;">
                <option value="" disabled selected>Select category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
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
    <button class="btn btn-primary" onclick="window.location.href='/admin#section2'">Back to products view</button>
@endsection