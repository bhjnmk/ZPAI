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
    @yield('navbar')
</header>
<body>

<div class="parallax" id="section0"></div>
<div style="position: absolute; left: 50%; top: 50%; width: 100%; text-align: center; color: #000; opacity: 0.8;">
    @yield('info')
</div>
<div class="parallax"></div>
<div class="parallax" id="section1" style="height: 150px;"></div>
<div class="parallax">
    <main class="py-4" style="background-color:rgba(255,255,255,.6); ">
        <div class="container">
            @yield('content')
        </div>
    </main>
</div>
<div class="parallax"></div>
<div class="parallax" id="section2" style="height: 150px;"></div>
<div class="parallax">
    <main class="py-4" style="background-color:rgba(255,255,255,.6); ">
        <div class="container">
            @yield('content2')
        </div>
    </main>
</div>
<div class="parallax"></div>
<div class="parallax" id="section3" style="height: 150px;"></div>
<div class="parallax">
    <main class="py-4" style="background-color:rgba(255,255,255,.6); ">
        <div class="container">
            @yield('content3')
        </div>
    </main>
</div>
<div class="parallax"></div>
<div class="parallax" id="section4" style="height: 150px;"></div>
<div class="parallax">
    <main class="py-4" style="background-color:rgba(255,255,255,.6); ">
        <div class="container">
            @yield('content4')
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

