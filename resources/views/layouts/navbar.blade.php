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
                <a style="color:#E3E8B0" href="/"><span class="glyphicon glyphicon-fire"></span> WebSiteName</a>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <u1 class="nav navbar-pills navbar-left">
                        <li><a href="/#section0">Home</a></li>
                        <li><a href="/#section1">News</a></li>
                        <li><a href="/#section2">About</a></li>
                        <li><a href="/#section3">Contact</a></li>
                        <li><a href="/#section4">All products</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($categories as $category)
                                    <li><a href="category?id={{$category->id}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </u1>
                    @auth
                    <ul class="nav navbar-pills navbar-right">
                        <li><a href="admin">Admin</a></li>
                        <li><a href="{{route('auth.logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
@endsection