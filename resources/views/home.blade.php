<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    @include('header');

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="formBlood bg-dark-subtle">
                    <h4 class="p-4 text-center">Pendonor</h4>
                    <br>
                    <div class="p-4">Anda dapat mendaftarkan diri sebagai pendonor darah di rumah sakit terdekat yang
                        anda pilih.</div>
                    <div class="col-md-12 text-center p-4">
                        <a href="pendonor" role="button" class="btn btn-primary text-center">Donor</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="formBlood bg-dark-subtle">
                    <h4 class="p-4 text-center">Penerima Donor</h4>
                    <br>
                    <div class="p-4">Anda dapat mengirimkan form request pencarian donor darah kepada rumah sakit
                        terdekat atau yang anda pilih.</div>
                    <div class="col-md-12 text-center p-4">
                        <a href="penerima" role="button" class="btn btn-primary ">Request Darah</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
