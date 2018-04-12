@extends('layouts.categories')

@section('title','ZPAI 2018 - Category view');

@section('content')
    @foreach($categories as $category)
        @if($category->id == $id)
            <h3>Category: {{$category->title}}</h3>
        @endif
    @endforeach
<br>
    @foreach($products as $product)
        @if($product->category == $id)
            <h4>{{$product->title}}</h4>
            <p>{{$product->description}}</p>
            <a class="example-image-link" href="/images/{{$product->img}}.jpg" data-lightbox="set"><img class="example-image" src="images/{{$product->img}}.jpg" alt="image-1" height="200" border="2"/></a>
            <br>
            <br>
        @endif
    @endforeach

@endsection