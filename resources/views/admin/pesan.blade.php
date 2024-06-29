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
              <th scope="col">Jam Mulai</th>
              <th scope="col">Jam Selesai</th>
              <th scope="col">Total</th>
              <th scope="col">Bukti</th>
              <th scope="col">Konfir</th>
            </tr>
          </thead>
          <tbody class="text">
            @foreach ($pesanans as $key => $pesanan)
            <tr>
            <td>{{ $key + 1 }}</td>
        <td>{{ $pesanan->user->name }}</td>
        <td>{{ $pesanan->created_at }}</td>
        <td>{{ $pesanan->tanggal }}</td>
        <td>{{ $pesanan->jam_mulai }}</td>
        <td>{{ $pesanan->jam_selesai }}</td>
        <td>{{ $pesanan->total_bayar }}</td>
        <td>
            @if((isset($pesanan->pembayaran->bukti_pembayaran)))
                <a href="{{ asset('bukti/' . $pesanan->pembayaran->bukti_pembayaran) }}" target="_blank">
                    <img src="{{ asset('bukti/' . $pesanan->pembayaran->bukti_pembayaran) }}" alt="Bukti Pembayaran" width="100">
                </a>
            @else
              belum upload bukti
                
            @endif
        </td>
        <td>{{ $pesanan->nama_lapangan }}</td>
        <td>
          @if ($pesanan->status == 'Dikonfirmasi')
            <span class="badge bg-success">dikonfirmasi</span>
          @else
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#konfirmasiModal1{{$pesanan->id_pesanan}}">Konfir</button>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal1">Hapus</button>
          @endif
         
        </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Konfirmasi -->
   @foreach ($pesanans as $pesanan)
<div class="modal fade" id="konfirmasiModal1{{$pesanan->id_pesanan}}" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="konfirmasiModalLabel{{$pesanan->id_pesanan}}">Konfirmasi Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('admin.konfir', $pesanan->id_pesanan) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
            <p>Anda yakin ingin mengkonfirmasi pesanan atas nama <strong>{{$pesanan->user->name}}</strong> ini?</p>
            @if(!$pesanan->pembayaran || !$pesanan->pembayaran->bukti_pembayaran)
              <p class="text-danger">Mohon maaf, user belum mengupload bukti pembayaran.</p>
            @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
              </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Konfirmasi -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
