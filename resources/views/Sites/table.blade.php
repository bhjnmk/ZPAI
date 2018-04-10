@extends('layouts.navbar');

@section('content')

    <table class="table table-hover">
        @foreach($products as $product)
            <tr>
                <td>{{$product->category}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->img}}</td>
            </tr>
        @endforeach

    </table>

@endsection