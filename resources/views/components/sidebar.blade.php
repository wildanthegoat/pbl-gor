<div class="sidebar col-2 bg-secondary">
  <!-- Sidebar -->
  <h5 class="mt-5 judul text-center">Admin</h5>
  <ul class="list-group list-group-flush">
      <li class="list-group-item bg-transparent"><a href="home">Home</a></li>
      <li class="list-group-item bg-transparent"><a href="member">Data Member</a></li>
      <li class="list-group-item bg-transparent"><a href="lapangan">Data Lapangan</a></li>
      <li class="list-group-item bg-transparent"><a href="pesanan">Data Pesanan</a></li>
      <li class="list-group-item bg-transparent"><a href="admin">Data Admin</a></li>
      <li class="list-group-item bg-transparent"></li>
  </ul>
  <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="mt-5 btn btn-inti text-dark">{{ __('Log Out') }}</button>
  </form>
</div>
