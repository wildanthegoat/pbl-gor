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

  <title>Data Admin</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <x-sidebar></x-sidebar>
      <div class="col-10 p-5 mt-5">
        <!-- Konten -->
        <h3 class="judul">Data Admin</h3>
        <hr>
        <button class="btn btn-inti mt-5" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="post">
                <div class="modal-body">
                  <!-- konten form modal -->
                  <div class="row justify-content-center align-items-center">
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="212279_exampleInputPassword1">
                     </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Hp</label>
                        <input type="number" name="hp" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- End Modal Tambah -->
        <table class="table table-hover mt-3">
          <thead class="table-inti">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">No Hp</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="text">
            <!-- Example data rows -->
            <tr>
              <th scope="row">1</th>
              <td>admin1</td>
              <td>Admin Satu</td>
              <td>admin1@example.com</td>
              <td>1234567890</td>
              <td>
                <button class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#editModal1">Edit</button>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>admin2</td>
              <td>Admin Dua</td>
              <td>admin2@example.com</td>
              <td>0987654321</td>
              <td>
                <button class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#editModal2">Edit</button>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>

        <ul class="pagination">
          <li class="page-item disabled">
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
