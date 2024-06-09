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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    .lapangan .container {
      display: flex;
      justify-content: center;
    }

    .lapangan .row {
      display: flex;
      justify-content:space-between;
      align-content: center;
    }
    .modal-body {
      
    }
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
              <div class="col-4 my-5">
                <img src="#" alt="Foto Profil" class="img-fluid ">
              </div>
              <div class="col-8">
                <h5 class="mb-3">nama_lengkap</h5>
                <p>jenis_kelamin</p>
                <p>email</p>
                <p>no_handphone</p>
                <p>alamat</p>
                <a href="../logout.php" class="btn btn-danger">Logout</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#editProfilModal" class="btn btn-inti">Edit Profil</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Profil -->

  <!-- Edit profil -->
  <div class="modal fade" id="editProfilModal" tabindex="-1" aria-labelledby="editProfilModalLabel" aria-hidden="true">
    <div class="modal-dialog edit modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfilModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row justify-content-center align-items-center">
              <div class="mb-3">
                <img src="../img/foto" alt="Foto Profil" class="img-fluid ">
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" value="">
                </div>
                <div class="mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">No Telp</label>
                  <input type="number" name="hp" class="form-control" id="exampleInputPassword1" value="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="">
              </div>
            </div>  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-inti" name="simpan" id="simpan">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Modal -->

  <section class="lapangan" id="lapangan">
    <div class="container">
      <main class="contain" data-aos="fade-right" data-aos-duration="1000">
        <div class="row row-cols-1 row-cols-md-4">
          <!-- Dummy Data for Lapangan 1 -->
          <div class="col">
            <div class="card">
              <img src="img/olahraga.jpg" alt="gambar lapangan" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Nama Lapangan 1</h5>
                <p class="card-text">Deskripsi Lapangan 1</p>
                <p class="card-price">Harga 1</p>
                <a href="jadwal" type="button" class="btn btn-secondary">Jadwal</a>
                <button type="button" class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#pesanModal1">Pesan</button>
              </div>
            </div>
          </div>

          <!-- Dummy Data for Lapangan 2 -->
          <div class="col">
            <div class="card">
              <img src="img/olahraga.jpg" alt="gambar lapangan" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Nama Lapangan 2</h5>
                <p class="card-text">Deskripsi Lapangan 2</p>
                <p class="card-price">Harga 2</p>
                <a href="jadwal" type="button" class="btn btn-secondary">Jadwal</a>
                <button type="button" class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#pesanModal2">Pesan</button>
              </div>
            </div>
          </div>

          <!-- Modal Pesan 1 -->
          <div class="modal fade" id="pesanModal1" tabindex="-1" aria-labelledby="pesanModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="pesanModalLabel1">Pesan Lapangan 1</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                  <div class="modal-body">
                    <!-- konten form modal -->
                    <div class="row justify-content-center align-items-center">
                      <div class="mb-3">
                        <img src="img/olahraga.jpg" alt="gambar lapangan" class="img-fluid">
                      </div>
                      <div class="text-center">
                        <h6 name="harga">Harga : Harga 1</h6>
                      </div>
                      <div class="col">
                        <input type="hidden" name="id_lpg" class="form-control" id="exampleInputPassword1" value="1">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Tanggal Main</label>
                          <input type="date" name="tgl_main" class="form-control" id="exampleInputPassword1">
                        </div>
                      </div>
                      <div class="col">
                        <input type="hidden" name="harga" class="form-control" id="exampleInputPassword1" value="Harga 1">
                        <div class="mb-3">
                          <label class="block flex-1">
                            <span class="text-gray-700">Jam Main</span>
                            <select class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                              <option>09:00 - 10:00</option>
                              <option>10:00 - 11:00</option>
                              <option>11:00 - 12:00</option>
                              <option>12:00 - 13:00</option>
                              <option>13:00 - 14:00</option>
                              <option>14:00 - 15:00</option>
                              <option>15:00 - 16:00</option>
                              <option>16:00 - 17:00</option>
                              <option>17:00 - 18:00</option>
                              <option>18:00 - 19:00</option>
                              <option>19:00 - 20:00</option>
                              <option>20:00 - 21:00</option>
                              <option>21:00 - 22:00</option>
                            </select>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-inti" name="pesan" id="pesan">Pesan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Modal Pesan 2 -->
          <div class="modal fade" id="pesanModal2" tabindex="-1" aria-labelledby="pesanModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="pesanModalLabel2">Pesan Lapangan 2</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                  <div class="modal-body">
                    <!-- konten form modal -->
                    <div class="row justify-content-center align-items-center">
                      <div class="mb-3">
                        <img src="img/olahraga.jpg" alt="gambar lapangan" class="img-fluid">
                      </div>
                      <div class="text-center">
                        <h6 name="harga">Harga : Harga 2</h6>
                      </div>
                      <div class="col">
                        <input type="hidden" name="id_lpg" class="form-control" id="exampleInputPassword1" value="2">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Tanggal Main</label>
                          <input type="date" name="tgl_main" class="form-control" id="exampleInputPassword1">
                        </div>
                      </div>
                      <div class="col">
                        <input type="hidden" name="harga" class="form-control" id="exampleInputPassword1" value="Harga 2">
                        <div class="mb-3">
                          <label class="block flex-1">
                            <span class="text-gray-700">Jam Main</span>
                            <select class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                              <option>09:00 - 10:00</option>
                              <option>10:00 - 11:00</option>
                              <option>11:00 - 12:00</option>
                              <option>12:00 - 13:00</option>
                              <option>13:00 - 14:00</option>
                              <option>14:00 - 15:00</option>
                              <option>15:00 - 16:00</option>
                              <option>16:00 - 17:00</option>
                              <option>17:00 - 18:00</option>
                              <option>18:00 - 19:00</option>
                              <option>19:00 - 20:00</option>
                              <option>20:00 - 21:00</option>
                              <option>21:00 - 22:00</option>
                            </select>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-inti" name="pesan" id="pesan">Pesan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    feather.replace();
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const buttons = document.querySelectorAll('.btn-inti');
      buttons.forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault();
          // Replace this with actual login status check logic
          const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
          if (isLoggedIn) {
            // Proceed with booking (open modal)
            const targetModal = button.getAttribute('data-bs-target');
            const modal = new bootstrap.Modal(document.querySelector(targetModal));
            modal.show();
          } else {
            // Redirect to login page
            window.location.href = "/login";
          }
        });
      });
    });
  </script>
</body>

</html>
