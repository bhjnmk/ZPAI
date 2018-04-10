@extends('layouts.app')
@section('navbar')
    <style>
        a {
            color: #A3A800;
            text-decoration: none;
        }
    </style>
    <nav class="navbar navbar-inverse" role="navigation" style="color: white; margin: 0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a style="color:#E3E8B0"><span class="glyphicon glyphicon-fire"></span> WebSiteName</a>
            </div>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <u1 class="nav navbar-pills navbar-left">
                    <li><a href="/o">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="about">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categories as $category)
                                <li><a href="Categories\{{$category->id}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </u1>
                <ul class="nav navbar-pills navbar-right">
                    <li><a href="view">Table View</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="addProd">Add new product</a></li>
                            <li><a href="addCat">Add new category</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection