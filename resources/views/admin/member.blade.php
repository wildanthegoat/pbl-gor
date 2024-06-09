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
  <title>Data Member</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <x-sidebar></x-sidebar>
      <div class="col-10 p-5 mt-5">
        <!-- Konten -->
        <h3 class="judul">Data Member</h3>
        <hr>
        <table class="table table-hover mt-5">
          <thead class="table-inti">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Email</th>
              <th scope="col">No hp </th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <form action="" method="post">
            <tbody class="text">
              <!-- Static Data Sample Row -->
              <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>Laki-Laki</td>
                <td>johndoe@example.com</td>
                <td>08123456789</td>
                <td>
                  <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <!-- Add more static rows as needed -->
            </tbody>
          </form>
        </table>

        <ul class="pagination">
          <li class="page-item">
            <a href="#" class="page-link">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a href="#" class="page-link">Next</a>
          </li>
        </ul>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
