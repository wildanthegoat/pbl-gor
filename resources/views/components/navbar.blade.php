<div class="container">
    <nav class="navbar fixed-top bg-body-secondary navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('lapangan') ? 'active' : '' }}" aria-current="page" href="{{ url('lapangan') }}">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('bayar') ? 'active' : '' }}" aria-current="page" href="{{ url('bayar') }}">Pembayaran</a>
                    </li>
                </ul>
                @auth
                <a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                    <i class="fas fa-xl fa-user text-xl"></i>
                    <small class="text-xs block">Profile</small>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') || request()->routeIs('register') ? 'active' : '' }}">
                    <i class="fas fa-xl fa-sign-in-alt text-xl"></i>
                    <small class="text-xs block">Login</small>
                </a>
                @endauth
            </div>
        </div>
    </nav>
</div>
