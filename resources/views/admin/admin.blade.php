@extends('layouts.navbar')

@section('title','ZPAI 2018 - Admin Panel');

@section('info')
    <div class="container" style="padding: 2em; text-align: center; position: relative; left: -45%;">
            <button type="button" class="btn btn-lg" onclick="window.location.href='/admin#section1'" style="margin: 10px;" > Categories </button>
            <button type="button" class="btn btn-lg" onclick="window.location.href='/admin#section2'" style="margin: 10px;"> Products </button>
            <button type="button" class="btn btn-lg" onclick="window.location.href='/admin#section3'" style="margin: 10px;"> Add New Category </button>
            <button type="button" class="btn btn-lg" onclick="window.location.href='/admin#section4'" style="margin: 10px;"> Add New Product </button>
    </div>
@endsection

@section('content')
    <button class="btn btn-primary" onclick="window.location.href='/admin#section0'">Back to buttons</button>
    <tr><button type="button" class="btn btn-success" onclick="window.location.href='/admin#section3'"> Add New Category </button><br></tr>
    <div style="height: 5px;"></div>
    <table class="table table-hover">
        <tr style="font-weight: bold">
            <td>Id</td>
            <td>Title</td>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td><button type="button" class="btn btn-warning"> Edit Category </button>  <button type="button" class="btn btn-danger"> Delete Category </button></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('content2')
    <button class="btn btn-primary" onclick="window.location.href='/admin#section0'">Back to buttons</button>
    <tr><button type="button" class="btn btn-success" onclick="window.location.href='/admin#section4'"> Add New Product </button></tr>
    <div style="height: 5px;"></div>
    <table class="table table-hover">
        <tr style="font-weight: bold">
            <td>Category id</td>
            <td>Title</td>
            <td>Description</td>
            <td>Image name</td>
            <td>AdminButtons</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->category}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->img}}</td>
                <td style="text-align: center">
                    <button type="button" class="btn btn-warning" style="border: 5px"> Edit Product </button>
                    <div style="height: 5px;"></div>
                    <button type="button" class="btn btn-danger"> Delete Product </button>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('content3')
    <h3>Adding new category</h3>
    <form action="{{route('admin.saveCat')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Category title">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
    <button class="btn btn-primary" onclick="window.location.href='/admin#section1'">Back to categories view</button>
@endsection

@section('content4')
    <h3>Adding new product</h3>
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

