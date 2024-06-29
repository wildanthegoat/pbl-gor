<div class="container ">
    <nav class="navbar fixed-top bg-body-secondary navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/lapangan">Lapangan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/bayar">Pembayaran</a>
            </li>
          </ul>
          @auth
          <a href="user/profil.php" data-bs-toggle="modal" data-bs-target="#profilModal" class="btn btn-success">
            <i data-feather="user"></i></a>
                @else
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') || request()->routeIs('register') ? 'active' : '' }}">
                    <i class="fas fa-xl fa-sign-in-alt text-xl"></i>
                    <small class="btn btn-success">Login</small>
                </a>
                @endauth
        </div>
      </div>
    </nav>
  </div>