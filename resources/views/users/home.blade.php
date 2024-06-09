<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>HOME PAGE</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: "Poppins", sans-serif;
}
header {
  height: 100vh;
  background-image: url("{{ asset('img/image.jpg') }}"); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.cara {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-image: url("{{ asset('img/kok.jpeg') }}");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
<body id="home">
    <!-- HTML -->
    <header>
        <!-- navigation -->
        <section class="navigation" id="navigation">
            <div class="container">
                <div class="box-navigation">
                    <div class="box">
                        <img src="img/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
                    </div>
                    <div class="box menu-navigation">
                        <ul>
                            <li><i class="ri-home-3-line"></i><a href="#home">Home</a></li>
                            <li><i class="ri-information-line"></i><a href="#about">About</a></li>
                            <li><i class="ri-question-mark"></i><a href="#cara">Tata Cara</a></li>
                            <li><i class="ri-contacts-book-line"></i><a href="#kontak">Kontak</a></li>
                            <li><i class="ri-user-line"></i><a href="{{ url('login') }}">LOGIN</a></li>
                        </ul>
                    </div>
                    <div class="box menu-bar">
                        <i class="ri-menu-3-fill" style="color: white;"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- navigation -->

        <!-- hero -->
        <section class="hero" id="hero">
            <h1>Bermain Badminton Bersama Hanya di</h1>
            <h1 class="gor">GOR PURNAMA BANJARMASIN</h1>
            <button id="bookingButton">Booking Sekarang</button>
        </section>           
        <!-- hero -->
    </header>

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="box-about">
                <div class="box">
                    <h1>Tentang Kami</h1>
                    <p>
                        Kami adalah sebuah platform yang bertujuan untuk menyediakan solusi terbaik
                        bagi para penggemar bulu tangkis di Banjarmasin dan sekitarnya. Dengan fokus pada
                        kemudahan, kenyamanan, dan efisiensi, kami memungkinkan pengguna untuk dengan mudah
                        memesan lapangan bulu tangkis secara online. memanfaatkan fasilitas yang tersedia
                        di GOR Purnama. Kami memahami betapa berharganya waktu anda. itulah sebabnya kami
                        berkomitmen untuk menyediakan pengalaman pemesanan yang mulus dan cepat melalui
                        platform web kami. Dengan beberapa klik, Anda dapat mereservasi lapangan bulu tangkis
                        sesuai preferensi Anda, tanpa harus mengurusnya secara langsung di tempat.
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('img/kok.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About -->

    <!-- Tata Cara -->
    <section class="cara" id="cara">
        <div class="container">
            <div class="box-cara">
                <div class="box">
                    <h1>Tata Cara Pemesanan</h1>
                    <p>Berikut ini akan disajikan tata cara pemesanannya:</p>
                </div>
                <div class="box">
                    <p>1. Pengguna harus membuat akun atau mendaftar sebagai anggota pada website ini.</p>
                    <p>2. Pengguna dapat mengecek lapangan dengan menginputkan variasi lapangan, tanggal main, dan jumlah rentang waktu.</p>
                    <p>3. Pengguna harus memilih tanggal dan waktu, melihat harga sewa lapangan, mengisi jumlah jam atau durasi, melengkapi formulir pendaftaran.</p>
                    <p>4. Bila dirasa sudah selesai, pengguna dapat mengklik tombol pesan.</p>
                    <p>5. Lalu pengguna akan di arahkan ke menu pembayaran.</p>
                    <p>6. Lakukan pembayaran ke rekening yang sudah tertera dan upload bukti pembayaran</p>
                    <p>7. Setelah upload, tunggu admin menyetujui pembayaran anda.</p>
                    <p>8. Setelah status sudah di setujui, silahkan datang ke GOR Purnama Banjarmasin sesuai jadwal yang dipesan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Tata Cara -->

    <!-- kontak -->
    <section class="kontak" id="kontak">
        <div class="container">
            <div class="box-kontak">
                <div class="box">
                    <h1>Kontak Kami</h1>
                </div>
                <div class="box-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15931.916722792696!2d114.6266585!3d-3.3552421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de427be82356077%3A0x5ee3672211c93ac2!2sGor%20Purnama!5e0!3m2!1sen!2sid!4v1716185749409!5m2!1sen!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="box">
                        <p>Whatsapp<a href="https://api.whatsapp.com/send?phone=628125565534">+628125565534</a></p>
                        <p>Instagram<a href="https://www.instagram.com/muhammad.zulvanoor/">@muhammad.zulvanoor</a></p>
                    </div>
                </div>
                <div class="box">
                    <tr>Gg. Brunei, Pemurus Dalam, Kec. Banjarmasin Selatan,</tr>
                    <br>
                    <tr>Kota. Banjarmasin, Kalimantan Selatan 70654</tr>
                </div>
            </div>
        </div>
    </section>
    <!-- kontak -->

    <script>
        const menuBar = document.querySelector(".menu-bar");
        const menuNav = document.querySelector(".menu-navigation");

        menuBar.addEventListener('click', function() {
            menuNav.classList.toggle('menu-active');
        });

        document.getElementById('bookingButton').addEventListener('click', function() {
            window.location.href = "{{ url('lapangan') }}";
        });
    </script>
</body>
</html>
