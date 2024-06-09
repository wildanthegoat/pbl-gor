<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Lapangan</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    /* Custom styles */
    .card-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <section class="jadwal" id="jadwal">
    <div class="container">
      <main class="contain" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="mb-4 text-center">Jadwal Lapangan</h2>
        <div class="row">
          <!-- Form untuk memilih tanggal jadwal -->
          <div class="col">
            <div class="card card-container">
              <div class="card-body text-center">
                <h5 class="card-title">Pilih Tanggal</h5>
                <form id="jadwalForm">
                  <div class="mb-3">
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <button type="submit" class="btn btn-primary">Cek Jadwal</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <!-- Daftar jadwal untuk tanggal yang dipilih -->
          <div class="col-md-8">
            <div class="card card-container">
              <div class="card-body">
                <h5 class="card-title">Jadwal Hari Ini</h5>
                <ul id="jadwalList" class="list-group">
                  <!-- Daftar jadwal hari ini atau tanggal yang dipilih akan dimuat di sini -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Fungsi untuk mendapatkan jadwal dari server (disini mensimulasikan)
      function getJadwal(tanggal) {
        // Ini hanya contoh, biasanya akan dilakukan permintaan HTTP ke server untuk mendapatkan jadwal sesuai tanggal yang dipilih
        const jadwal = [
          { namaPelanggan: "John Doe", lapangan: "1", sesi: "09:00 - 10:00", statusLapangan: "Terbooking" },
          { namaPelanggan: "Jane Doe", lapangan: "2", sesi: "10:30 - 11:30", statusLapangan: "Terbooking" },
          { namaPelanggan: "Alice", lapangan: "3", sesi: "12:00 - 13:00", statusLapangan: "Tersedia" }
        ];
        return jadwal;
      }

      const jadwalForm = document.getElementById('jadwalForm');
      const jadwalList = document.getElementById('jadwalList');

      // Menghandle submit form untuk memilih tanggal jadwal
      jadwalForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan pengiriman form
        const tanggal = document.getElementById('tanggal').value;
        const jadwal = getJadwal(tanggal); // Mendapatkan jadwal dari server
        renderJadwal(jadwal); // Menampilkan jadwal ke halaman
      });

      // Fungsi untuk menampilkan jadwal ke halaman
      function renderJadwal(jadwal) {
        jadwalList.innerHTML = ''; // Menghapus konten sebelumnya
        jadwal.forEach(function(item) {
          const li = document.createElement('li');
          li.className = 'list-group-item';
          li.innerHTML = `
            <div class="row align-items-center">
              <div class="col">${item.namaPelanggan}</div>
              <div class="col">${item.sesi}</div>
              <div class="col">Lapangan ${item.lapangan}</div>
              <div class="col">${item.statusLapangan}</div>
            </div>`;
          jadwalList.appendChild(li);
        });
      }

      // Menampilkan jadwal hari ini secara otomatis ketika halaman dimuat
      const today = new Date();
      const formattedDate = today.toISOString().split('T')[0];
      const jadwalHariIni = getJadwal(formattedDate);
      renderJadwal(jadwalHariIni);
    });
  </script>
  <script>
    feather.replace();
  </script>
</body>
</html>
