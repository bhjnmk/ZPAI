@extends('layouts.navbar')

@section('content')
    @foreach($products as $product)
        <div>
            <button class="accordion">{{$product->title}}</button>
            <div class="panel">
                <p>{{$product->description}}</p>
                <a class="example-image-link" href="/images/{{$product->img}}.jpg" data-lightbox="set"><img class="example-image" src="images/{{$product->img}}.jpg" alt="image-1" height="200" border="2"/></a>
            </div>
        </div>
    @endforeach
@endsection