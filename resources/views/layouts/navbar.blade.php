@extends('layouts.app');

@section('navbar')
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <u1 class="nav navbar-pills navbar-left" style="color: white">
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="add">Add</a></li>
                    <li><a href="view">View</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categories as $category)
                                <li><a href="Categories\{{$category->id}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <
                </u1>
            </div>
        </div>
    </nav>

@endsection