<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    @include('header');

    <div class="col-6 offset-md-3 mt-5" id="form-container">
        <h1 class="text-black offset-md-2">Form Pengajuan Request Darah</h1>
        <form action="/bloodReq" method="POST">
            @csrf
            <div class="mb-3 text-black fw-bold">
                <label for="NIK" class="form-label">NIK</label>
                <input type="text"  class="form-control" id="NIK" name="NIK" >
            </div>
            <div class="mb-3 text-black fw-bold">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text"  class="form-control" id="nama" name="nama" >
            </div>
            <div class="mb-3 text-black fw-bold">
                <label for="penyakit" class="form-label">Penyakit yang diderita</label>
                <input type="text"  class="form-control" id="penyakit" name="penyakit" >
            </div>
            <div class="mb-3 text-black ">
                <label for="golonganDarah" class="form-label fw-bold">Request Golongan Darah</label>
                <div class="mb-1 form-check">
                    <input class="form-check-input" type="radio" name="golonganDarah" id="golonganDarah" value="A">
                    <label class="form-check-label" for="golonganDarah">
                      A
                    </label>
                </div>
                <div class="mb-1 form-check">
                    <input class="form-check-input" type="radio" name="golonganDarah" id="golonganDarah" value="B">
                    <label class="form-check-label" for="golonganDarah">
                      B
                    </label>
                </div>
                <div class="mb-1 form-check">
                    <input class="form-check-input" type="radio" name="golonganDarah" id="golonganDarah"value="AB">
                    <label class="form-check-label" for="golonganDarah">
                      AB
                    </label>
                </div>
                <div class="mb-1 form-check">
                    <input class="form-check-input" type="radio" name="golonganDarah" id="golonganDarah" value="O">
                    <label class="form-check-label" for="golonganDarah">
                      O
                    </label>
                </div>
            </div>

            <div class="mb-3 text-black fw-bold">
                <label for="tinggiBadan" class="form-label">Tinggi Badan (cm)</label>
                <input type="number"  class="form-control" id="tinggiBadan" name="tinggiBadan" >
            </div>
            <div class="mb-3 text-black fw-bold">
                <label for="beratBadan" class="form-label">Berat Badan (kg)</label>
                <input type="number"  class="form-control" id="beratBadan" name="beratBadan" >
            </div>

            <button type="submit"  class="btn btn-danger">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
