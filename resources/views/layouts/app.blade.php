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
    <link href="{{ asset('css/awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        header {
            z-index: 5000;
            position: fixed;
            top: 0;
            padding: 1em;
            background-color: #222222;
            clear: left;
            text-align: center;
            width: 100%;
            height: 80px;
        }
        body {
            z-index: -5000;
        }
        footer{
            padding: 1em;
            color: #A3A800;
            background-color: #222222;
            clear: left;
            text-align: center;
            display: block;"
        }
    </style>
</head>
<header>
    @yield('navbar')
</header>
<body>
<div class="parallax"></div>
<div id="contDiv">
    <div id="scrollTo">
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
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
    var element = document.getElementById("scrollTo");
    element.scrollIntoView(true);
    var winH = window.innerHeight;
    var elemH = element.clientHeight;
    var y = (winH-elemH)/2;
    window.scrollBy(0, -y);
</script>
</body>

<footer>
    <p>&copy;ZPAI 2018, Magdalena Kuźmicz</p>
</footer>

</html>

