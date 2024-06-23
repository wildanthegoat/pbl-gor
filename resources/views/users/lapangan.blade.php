<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Lapangan</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    .lapangan .container {
      display: flex;
      justify-content: center;
    }

    .lapangan .row {
      display: flex;
      justify-content: space-between;
      align-content: center;
    }

    .modal-body {}

    .lapangan .card {
      width: 17rem;
      margin: -100px;
      margin-top: 200px;
      margin-right: 50px;
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
  <!-- End Modal Profil -->

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
  <!-- End Edit Profile Modal -->

  <!-- Lapangan Modal -->
  <section class="lapangan" id="lapangan">
    <div class="container">
        <main class="contain" data-aos="fade-right" data-aos-duration="1000">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach ($lapangans as $lapangan)
                    @if($lapangan->id_lapangan == 1 || $lapangan->id_lapangan == 2)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('images/' . $lapangan->foto) }}" alt="gambar lapangan" class="card-img-top img-detail"
                                    data-bs-toggle="modal" data-bs-target="#imagePreviewModal{{ $lapangan->id_lapangan }}" width="100"
                                    height="200">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $lapangan->nama_lapangan }}</h5>
                                    <p class="card-text">{{ $lapangan->keterangan }}</p>
                                    <p class="card-price">Harga per jam: {{ $lapangan->harga }}</p>
                                    <a href="jadwal" type="button" class="btn btn-secondary">Jadwal</a>
                                    <button type="button" class="btn btn-inti" data-bs-toggle="modal"
                                        data-bs-target="#pesanModal{{ $lapangan->id_lapangan }}">Pesan</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Pesan -->
                        <div class="modal fade" id="pesanModal{{ $lapangan->id_lapangan }}" tabindex="-1"
                            aria-labelledby="pesanModalLabel{{ $lapangan->id_lapangan }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="pesanModalLabel{{ $lapangan->id_lapangan }}">Pesan {{ $lapangan->nama_lapangan }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('pesan.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <!-- Form fields -->
                                      <div class="modal-body">
                                          <div class="row justify-content-center align-items-center">
                                              <div class="mb-3">
                                                  <img src="{{ asset('images/' . $lapangan->foto) }}" alt="gambar lapangan" class="img-fluid">
                                              </div>
                                              <div class="text-center mb-3">
                                                  <h6 name="harga">Harga per jam: {{ $lapangan->harga }}</h6>
                                              </div>
                                              <div class="col-12 mb-3">
                                                  <input type="hidden" name="id_lpg" class="form-control" value="{{ $lapangan->id_lapangan }}">
                                                  <label for="tgl_main" class="form-label">Tanggal Main</label>
                                                  <input type="date" name="tgl_main" class="form-control" id="tgl_main">
                                              </div>
                                              <div class="col-6 mb-3">
                                                  <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                                  <input type="time" name="jam_mulai" class="form-control" id="jam_mulai" min="09:00" max="22:00">
                                              </div>
                                              <div class="col-6 mb-3">
                                                  <label for="jam_selesai" class="form-label">Jam Selesai</label>
                                                  <input type="time" name="jam_selesai" class="form-control" id="jam_selesai" min="09:00" max="22:00">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-success" name="pesan" id="pesan">Pesan</button>
                                      </div>
                                  </form>                                  
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Pesan -->
                    @endif
                @endforeach
            </div>
        </main>
    </div>
</section>
  <!-- End Lapangan Modal -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz4fnFO9gybBogGz1q58r5o3S2j6kJmGp3fA8m81/Tf0I4uENtBfYeQm9g" crossorigin="anonymous"></script>
  <script>
    feather.replace();
    // Remove backdrop if it still exists after modal is hidden
    document.getElementById('profilModal').addEventListener('hidden.bs.modal', function () {
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        backdrop.parentNode.removeChild(backdrop);
      }
    });
    document.getElementById('editProfilModal').addEventListener('hidden.bs.modal', function () {
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        backdrop.parentNode.removeChild(backdrop);
      }
    });
    document.getElementById('lapangan').addEventListener('hidden.bs.modal', function () {
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        backdrop.parentNode.removeChild(backdrop);
      }
    });
    document.addEventListener("DOMContentLoaded", function () {
      // Set min and max date for tgl_main input
      const today = new Date();
      const dd = String(today.getDate()).padStart(2, '0');
      const mm = String(today.getMonth() + 1).padStart(2, '0');
      const yyyy = today.getFullYear();
      const maxDate = new Date(today);
      maxDate.setMonth(today.getMonth() + 1);

      const formattedToday = yyyy + '-' + mm + '-' + dd;
      const formattedMaxDate = maxDate.toISOString().split('T')[0];

      document.querySelectorAll('[name="tgl_main"]').forEach(input => {
        input.setAttribute('min', formattedToday);
        input.setAttribute('max', formattedMaxDate);
      });

      // Restrict time input to 09:00 - 22:00
      document.querySelectorAll('[name="jam_mulai"], [name="jam_selesai"]').forEach(input => {
        input.setAttribute('min', '09:00');
        input.setAttribute('max', '22:00');
      });

      // Handle booking button click
      const buttons = document.querySelectorAll('.btn-inti');
      buttons.forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          const isLoggedIn = "{{ auth()->check() ? 'true' : 'false' }}";
          if (isLoggedIn === 'true') {
            const targetModal = button.getAttribute('data-bs-target');
            const modal = new bootstrap.Modal(document.querySelector(targetModal));
            modal.show();
          } else {
            window.location.href = "/login";
          }
        });
      });
    });
  </script>
</body>

</html>
