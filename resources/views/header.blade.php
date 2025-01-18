<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @yield('css')
    <style>
        .navbar {
            height: 80px;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 30px !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
            @if(Auth::user())
            <a href="{{ Auth::user()->role == 'user' ? 'home' : 'adminHome' }}" style="text-decoration:none">
                <h1 class="navbar-brand text-danger">Blood<span class="navbar-brand text-black">Bank</span></h1>
            </a>
            @else
            <a href="home" style="text-decoration:none">
                <h1 class="navbar-brand text-danger">Blood<span class="navbar-brand text-black">Bank</span></h1>
            </a>
            @endif

            <div class="d-flex">
                <?php
                if(Auth::user()){
                    ?><a href="actionlogout" class="btn btn-danger">Log Out</a>
                    <?php
                }

                ?>
            </div>
        </div>

    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
