<ul class="sidebar navbar-nav">
  <li class="nav-item @yield('dashboard')">
    <a class="nav-link" href="{{route('dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item @yield('charts')">
    <a class="nav-link" href="{{route('charts')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>
  <li class="nav-item @yield('tabel')">
    <a class="nav-link" href="{{route('tabel')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Tabel</span></a>
  </li>
  <li class="nav-item @yield('kategori')">
    <a class="nav-link" href="{{route('kategori.index')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Kategori</span></a>
  </li>
  <li class="nav-item @yield('produk')">
    <a class="nav-link" href="{{route('produk.index')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Produk</span></a>
  </li>
</ul>