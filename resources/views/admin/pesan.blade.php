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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <title>Data Pesanan</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <x-sidebar></x-sidebar>
      <div class="col-10 p-5 mt-5">
        <!-- Konten -->
        <h3 class="judul">Data Pesanan</h3>
        <hr>
        <a href="export.php" class="btn btn-inti mt-5">Download</a>
        <table class="table table-hover mt-3">
          <thead class="table-inti">
            <tr>
              <th scope="col">No</th>
              <th scope="col">NamaCust</th>
              <th scope="col">TglPesan</th>
              <th scope="col">TglMain</th>
              <th scope="col">Lama</th>
              <th scope="col">Total</th>
              <th scope="col">Bukti</th>
              <th scope="col">Konfir</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text">
            <!-- Static Data Sample Row -->
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>2024-01-01</td>
              <td>2024-01-02</td>
              <td>2 Hours</td>
              <td>$100</td>
              <td><img src="../img/sample.jpg" width="100" height="100"></td>
              <td>Pending</td>
              <td>
                <button type="button" class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#konfirmasiModal1">Konfir</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal1">Hapus</button>
              </td>
            </tr>
            <!-- Add more static rows as needed -->
          </tbody>
        </table>

        <!-- Pagination (Static Example) -->
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

        <!-- Modal Konfirmasi -->
        <div class="modal fade" id="konfirmasiModal1" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pesanan John Doe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Anda yakin ingin mengkonfirmasi pesanan ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="#" class="btn btn-primary">Konfirmasi</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Konfirmasi -->

        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusModal1" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Hapus Pesanan John Doe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Anda yakin ingin menghapus pesanan ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="#" class="btn btn-danger">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Hapus -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
