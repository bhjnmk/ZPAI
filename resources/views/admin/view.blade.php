@extends('layouts.navbar')

@section('content')
    <tr><button type="button" class="btn btn-success" onclick="window.location.href='/addCat'"> Add New Category </button><br></tr>
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
    <tr><button type="button" class="btn btn-success" onclick="window.location.href='/addProd'"> Add New Product </button></tr>
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