<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/effects.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<header>
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
</header>
<body>
<div class="parallax"></div>
<div class="parallax">
    <main class="py-4" style="background-color:rgba(255,255,255,.6); ">
        <div class="container">
            @yield('content')
        </div>
    </main>
</div>
<div class="parallax"></div>
<script>
    /* accordiion script */
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>

<footer>
    <p>&copy;ZPAI 2018, Magdalena Kuźmicz</p>
</footer>

</html>

