<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body.register {
      background-image: url("img/image.jpg");
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .center {
      width: 800px;
      background-color: whitesmoke;
      border-radius: 10px;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
      padding: 20px;
    }

    .center h1 {
      text-align: center;
      color: yellowgreen;
      margin-bottom: 20px;
    }

    .center form {
      padding: 0 20px;
    }

    .button {
      width: 100%;
      height: 50px;
      border: 1px solid yellowgreen;
      border-radius: 25px;
      font-size: 18px;
      font-weight: 700;
      cursor: pointer;
      color: yellowgreen;
      background: none;
      transition: background-color 0.3s, color 0.3s;
    }

    .button:hover {
      background-color: yellowgreen;
      color: white;
    }
  </style>
</head>

<body class="register">
  <div class="center">
    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
      @csrf
      <h1>Registrasi</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" required maxlength="12">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
          </div>
        </div>
        <div class="mb-3 d-flex align-items-center">
          <p class="mb-0">Jenis Kelamin:</p>
          <div class="form-check mx-3">
            <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" required>
            <label class="form-check-label" for="male">Laki-Laki</label>
          </div>
          <div class="form-check mx-3">
            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" required>
            <label class="form-check-label" for="female">Perempuan</label>
          </div>
        </div>
        <div class="mt-3 mb-4">
          <button class="button btn-inti" name="daftar" id="daftar" type="submit">Daftar</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
