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
        <form action="{{route('logout')}}" method="post">
          @csrf
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
                <button type="submit" class="btn btn-danger mr-5">Logout</button>
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
          @csrf
            <table class="table my-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pesan</th>
                        <th scope="col">Nama Lapangan</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam selesai</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pesanans as $index => $pesanan)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                    <td>{{ $pesanan->lapangan->tanggal }}</td>
                    <td>{{ $pesanan->lapangan->nama_lapangan}}</td>
                    <td>{{ $pesanan->jam_mulai }}</td>
                    <td>{{ $pesanan->jam_selesai }}</td>
                    <td>{{ $pesanan->total_bayar }}</td>

                        <td>
                            @if($pesanan->status == 'dibayar')
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaldetail{{ $pesanan->id_pesanan }}">Detail</button>
                                @elseif($pesanan->status == 'Dikonfirmasi')
                                <span class="badge bg-success">Dikonfirmasi</span>
                            @else
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmCancelModal{{ $pesanan->id_pesanan }}">Batal</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#bayarModal{{$pesanan->id_pesanan}}" class="btn btn-success">Bayar</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->

            <!-- End Pagination -->
        </form>
     </div>

                 <!-- Modal Bayar -->
                 @foreach($pesanans as $pesanan)
                
                  <div class="modal fade" id="bayarModal{{$pesanan->id_pesanan}}" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="bayarModelLabel">Bayar Lapangan</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                      
                        <form action="{{route('Pembayaran.store', $pesanan->id_pesanan)}}" method="post" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <input type="hidden" name="id_pesanan" value="{{ $pesanan->id_pesanan }}">
                          <div class="modal-body">
                            <!-- konten form modal -->
                            <div class="row justify-content-center align-items-center">
                              <div class="col">
                                <div class="mb-3">
                                  <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                  <input type="time" name="jam_mulai" class="form-control" id="jam_mulai" value="{{$pesanan->jam_mulai}}" disabled>
                                </div>
                                <div class="mb-3">
                                  <label for="jam_selesai" class="form-label">Jam Habis</label>
                                  <input type="time" name="jam_selesai" class="form-control" id="jam_selesai" value="{{$pesanan->jam_selesai}}" disabled>
                                </div>
                              </div>
                              <div class="col">
                                <div class="mb-3">
                                  <label for="tanggal" class="form-label">Lama Main</label>
                                  <input type="text" name="tanggal" class="form-control" id="lama_main"  disabled>
                                </div>
                                <div class="mb-3">
                                  <label for="total_bayar" class="form-label">Harga</label>
                                  <input type="number" name="total_bayar" class="form-control" id="total_bayar" value="{{$pesanan->lapangan->harga}}" disabled>
                                </div>
                              </div>
                              <div class="input-group ">
                                <div class="input-group-prepend border border-danger">
                                  <span class="input-group-text">Total</span>
                                </div>
                                <input type="number" name="total_bayar" class="form-control border border-danger" id="total_bayar" value="{{$pesanan->total_bayar}}" disabled>
                              </div>
                              <div class="mt-3">
                                <label for="exampleInputPassword1" class="form-label">Transfer ke : BRI 0892322132 a/n Sport Center</label>
                              </div>
                              <div class="mt-3">
                                <label for="bukti_pembayaran" class="form-label">Upload Bukti</label>
                                <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran">
                              </div>
                            </div>
                          </div>
                          <div class="mt-3 mx-3">
                            <h6 class=" text-center border border-danger">Status : {{$pesanan->status}}</h6>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-inti">Bayar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                 
                  @endforeach
                  <!-- End Modal Bayar -->

                   <!-- Modal Detail -->
                 @foreach($pesanans as $pesanan)
                
                <div class="modal fade" id="modaldetail{{$pesanan->id_pesanan}}" tabindex="-1" role="dialog" aria-labelledby="modaldetailLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modaldetailLabel">Detail Pembayaran {{$pesanan->nama_lapangan}}</h5>
                      </div>
                    
                      <form action="{{route('Pembayaran.store', $pesanan->id_pesanan)}}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PUT')
                       <input type="hidden" name="id_pesanan" value="{{ $pesanan->id_pesanan }}">
                        <div class="modal-body">
                          <!-- konten form modal -->
                          <div class="row justify-content-center align-items-center">
                             <div class="col">
                                 <div class="mb-3">
                                  <label for="tanggal" class="form-label">Tanggal Main</label>
                                  <input type="text" name="tanggal" class="form-control" id="tanggal" value="{{$pesanan->tanggal}}" disabled>
                                </div>
                              </div>
                              <div class="col">
                              <div class="mb-3">
                                  <label for="lama_main" class="form-label">Lama Main</label>
                                  <input type="text" name="lama_main" class="form-control" id="lama_main" disabled>
                              </div>
                          </div>
                          <div class="input-group mt-3">
                              <div class="input-group-prepend border border-danger">
                                  <span class="input-group-text">Total</span>
                              </div>
                              <input type="number" name="total_bayar" class="form-control border border-danger" id="total_bayar" value="{{$pesanan->total_bayar}}" disabled>
                          </div>
                        <div class="mt-3 mx-3">
                          <h8>* Menunggu Konfirmasi dari Admin</h8>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-bs-dismiss="modal" class="btn btn-success">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
               
                @endforeach
                <!-- End Modal Detail -->
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    feather.replace();

     // Ambil nilai jam mulai dan jam selesai
     var jamMulai = document.getElementById('jam_mulai').value;
    var jamSelesai = document.getElementById('jam_selesai').value;

    // Ubah format waktu menjadi jam
    var dateMulai = new Date("2000-01-01 " + jamMulai);
    var dateSelesai = new Date("2000-01-01 " + jamSelesai);

    // Hitung lama main dalam jam
    var lamaMain = (dateSelesai - dateMulai) / (1000 * 60 * 60); // Dalam jam

    // Tampilkan lama main di input lama_main
    document.getElementById('lama_main').value = lamaMain +(' jam'); // Menampilkan 2 desimal

  
  </script>
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
