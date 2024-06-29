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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Data Lapangan</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <x-sidebar></x-sidebar>
      <div class="col-10 p-5 mt-5">
        <h3 class="judul">Data Lapangan</h3>
        <hr>
       
        
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Lapangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('admin.lapangan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <!-- konten form modal -->
                  <div class="mb-3">
                    <label for="namaLapangan" class="form-label">Nama Lapangan</label>
                    <input type="text" name="nama_lapangan" class="form-control" id="namaLapangan" required>
                  </div>
                  <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                  </div>
                  <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
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
              <th scope="col">Nama Lapangan</th>
              <th scope="col">Harga</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Foto</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="text">
            <!-- Data Lapangan -->
            @foreach ($lapangans as $lapangan)
            <tr>
              <td>{{ $lapangan->id_lapangan }}</td>
              <td>{{ $lapangan->nama_lapangan }}</td>
              <td>{{ $lapangan->harga }}</td>
              <td>{{ $lapangan->keterangan }}</td>
              <td><img src="{{ asset('images/' . $lapangan->foto) }}" alt="{{ $lapangan->nama_lapangan }}" width="100"></td>
              <td>
                <button class="btn btn-inti" data-bs-toggle="modal" data-bs-target="#editModal{{$lapangan->id_lapangan}}">Edit</button>
                
                <!-- Modal Edit -->
                <div class="modal fade" id="editModal{{$lapangan->id_lapangan}}" tabindex="-1" aria-labelledby="editModal{{$lapangan->id_lapangan}}Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModal{{$lapangan->id_lapangan}}Label">Edit Data Lapangan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{ route('admin.lapangan.update', $lapangan->id_lapangan) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                          <!-- konten form modal -->
                          <div class="mb-3">
                            <label for="editNamaLapangan" class="form-label">Nama Lapangan</label>
                            <input type="text" name="nama_lapangan" class="form-control" id="editNamaLapangan" value="{{ $lapangan->nama_lapangan }}" required>
                          </div>
                          <div class="mb-3">
                            <label for="editHarga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" id="editHarga" value="{{ $lapangan->harga }}" required>
                          </div>
                          <div class="mb-3">
                            <label for="editKeterangan" class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="editKeterangan">{{ $lapangan->keterangan }}</textarea>
                          </div>
                          <div class="mb-3">
                            <label for="editFoto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="editFoto">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary" name="update" id="update">Perbarui</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Modal Edit -->

                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Include JavaScript Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
