<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>


<body>
    @include('header');
    <div class="d-flex flex-column align-items-center mt-4">
        <p id="title" class="fs-1 fw-bold">Login</p>
        {{-- Ke Controller --}}
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="mb-3 w-100">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="from-check">
                {{-- SET VALUE FROM COOKIE --}}
                <input name="remember_me" class="from-check-input" type="checkbox">
                <label for="flexCheckDefault">Remember Me</label>
            </div>
            <h6 class="mt-3 text-black">Don't have an account? <a class="link text-danger" href="/register">Register!</a></h6>

            {{-- SHOW ERROR MESSAGE --}}
            @if ($errors->any())
            <span class="text-danger">{{ $errors->first() }}</span>
            @endif
            <button type="submit" class="btn btn-danger mt-4">Login</button>

        </form>
    </div>

</body>


</html>
