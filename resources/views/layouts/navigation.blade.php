<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TICKET</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Pemesanan</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('Index.penumpang')}}">Penumpang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Index.petugas')}}">Petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Index.rute')}}">Rute</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Index.transportasi')}}">Transportasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Index.type')}}">Type Transportasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('transaksi.index')}}">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('transaksi.laporan')}}">Laporan</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">logout</a>
        </li>     
      </ul>
    </div>
  </div>
</nav>