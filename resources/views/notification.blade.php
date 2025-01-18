<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .Box{
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;

        border-radius: 20px;
        height: 400px;
        width:  500px;
        background-color: rgb(48, 48, 48);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);


        }
        .Box .Desc1{
            font-size: 18px;
            padding: 1px 75px;

        }
        .Box h3{
            font-size: 50px;
            padding: 20px 75px;
            line-height: 1px;
        }
        .Box .Desc2{
            font-size: 18px;
            line-height: 1px;
        }


    </style>
</head>
<body>

    @include('header');
    <div class="Box">
        <h3 class="mt-5 text-danger">Selamat !</h3>
        <H6 class="Desc1 mt-5 text-white">
            Data anda sudah direkam dan akan diproses oleh rumah sakit,
            mohon ditunggu informasi selanjutnya melalui email yang sudah
            didaftarkan.
        </H6>
        <h6 class="Desc2 mt-3 text-white">Terimakasih.</h6>
        <a class="btn btn-danger mt-5" href="/">Done</a>




    </div>
</body>
</html>
