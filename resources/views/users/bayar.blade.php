<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembayaran</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    .table td, .table th {
      vertical-align: middle;
      text-align: center;
    }

    .btn-inti {
      background-color: #28a745;
      
    }

    .text-head {
      text-align: center;
      color: #28a745;
      margin-top: 130px;
    }

    .pagination {
      justify-content: center;
    }

    .btn-keluar {
      background-color: #dc3545;
      color: white;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- End Navbar -->

  <!-- Modal Profil -->
  <!-- Bagian Modal Profil Anda di sini -->
  <!-- End Modal Profil -->

  <!-- Edit profil -->
  <!-- Bagian Edit profil Anda di sini -->
  <!-- End Edit profil -->

  <section class="lapangan mb-5" id="lapangan">
    <div class="container-fluid">
      <h2 class="text-head"><span>Pembayaran</span> Lapangan </h2>
      <form action="" method="post" enctype="multipart/form-data" class="px-4">
        <table class="table my-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal Pesan</th>
              <th scope="col">Nama Lapangan</th>
              <th scope="col">Jam Main</th>
              <th scope="col">Total Bayar</th>
              <th scope="col">Status Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>yy/mm/dd</td>
              <td>Lapangan 1</td>
              <td>08:00</td>
              <td>40,000</td>
              <td>
                <button type="button" class="btn btn-danger">Batal</button>
                <button type="button" class="btn btn-success">Bayar</button>
              </td>
            </tr>
            <!-- Isi tabel sewa lapangan Anda di sini -->
          </tbody>
        </table>
        <!-- Pagination -->
        <ul class="pagination">
          <!-- Bagian Pagination Anda di sini -->
        </ul>
        <!-- End Pagination -->
      </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>
