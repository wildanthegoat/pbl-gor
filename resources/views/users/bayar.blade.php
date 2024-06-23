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
  @auth
  <div class="modal fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profilModalLabel">Profil Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-4 my-2">
                <img src="img/avatar-1.png" alt="Foto Profil" class="img-fluid ">
              </div>
              <div class="col-8">
              <h5 class="mb-3">{{ auth()->user()->name ?? '' }}</h5>
                <p>{{ auth()->user()->jk ?? '' }}</p>
                <p>{{ auth()->user()->email ?? '' }}</p>
                <p>{{ auth()->user()->no_hp ?? '' }}</p>
                <a href="" data-bs-toggle="modal" data-bs-target="#editProfilModal" class="btn btn-success">Edit Profil</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endauth
  <!-- Modal Profil -->

  <!-- Edit profil -->
   @auth
  <div class="modal fade" id="editProfilModal" tabindex="-1" aria-labelledby="editProfilModalLabel" aria-hidden="true">
    <div class="modal-dialog edit modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfilModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('users.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="modal-body">
            <div class="row justify-content-center align-items-center">
              <div class="col">
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ auth()->user()->name ?? '' }}">
                </div>
                <div class="mb-3">
                  <label for="jk" class="form-label">Jenis Kelamin</label>
                  <select class="form-control" id="jk" name="jk" required>
                  <option value="Laki-laki" {{ auth()->user()->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                  <option value="Perempuan" {{ auth()->user()->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                <label for="no_hp" class="form-label">No Telp</label>
                  <input type="number" name="no_hp" class="form-control" id="no_hp" value="{{ auth()->user()->no_hp ?? '' }}">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="{{ auth()->user()->email ?? '' }}">
                </div>
              </div>
            </div>  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" name="simpan" id="simpan">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endauth
  <!-- End Edit Modal -->
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
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam selesai</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Status Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayarans as $index => $pembayaran)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pembayaran->pesanan->tgl_main }}</td>
                        <td>{{ $pembayaran->pesanan->lapangan->nama_lapangan }}</td>
                        <td>{{ $pembayaran->pesanan->jam_mulai }}</td>
                        <td>{{ $pembayaran->pesanan->jam_selesai }}</td>                        
                        <td>{{ $pembayaran->pesanan->harga }}</td>
                        <td>
                            @if($pembayaran->status_pembayaran == 'paid')
                                <span class="badge bg-success">Sudah Bayar</span>
                            @else
                                <button type="button" class="btn btn-danger">Batal</button>
                                <button type="button" class="btn btn-success">Bayar</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <ul class="pagination">
                {{ $pembayarans->links() }}
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
