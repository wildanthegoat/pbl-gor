<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <x-sidebar></x-sidebar>
      <div class="col-10 p-5 mt-5">
        <h3 class="judul">Home</h3>
        <hr>
        <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-center my-5 gap-3">
          <div class="col">
            <div class="card align-items-center">
              <img src="img/badminton.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jumlah Lapangan</h5>
                <h2 class="card-text text-center">{{ $jumlahLapangan }}</h2> <!-- Ganti dengan nilai statis -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card align-items-center">
              <img src="img/olahraga.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jumlah Pesanan</h5>
                <h2 class="card-text text-center">20</h2> <!-- Ganti dengan nilai statis -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card align-items-center">
              <img src="img/avatar-1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jumlah Member</h5>
                <h2 class="card-text text-center">{{ $jumlahMember }}</h2> <!-- Ganti dengan nilai statis -->
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
