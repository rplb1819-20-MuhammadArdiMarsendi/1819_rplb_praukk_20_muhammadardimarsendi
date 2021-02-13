<!DOCTYPE html>
<html>
<head>
	<title>Edit Petugas</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
<!-- 	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
 --></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TRAVELLING HYUNG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Konfirmasi Pembayaran</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="container">
    <h3 class="text-center font-weight-bold" style="margin-bottom: 10px;">TABEL PETUGAS</h3>
  
  <div class="row">
    <div class="col-sm-10">
      <form class="form-inline" style="margin-bottom:10px;"  method="GET" action="/Kelas">
        <input type="text" name="Cari" class="form-control" style="margin-bottom:1px;">
        <button type="submit" class="btn btn-dark" style="margin-left:10px; margin-bottom: 10px;">Cari</button>
      </form>
    </div>
    
    <div class="col-sm-2">
      <a href="" class="btn btn-dark float-right">tambah</a>
    </div>

  </div>
  <div class="row">
		<table class="table table-bordered" style="margin-top: 1%;">
  <thead>
    <tr>
      <th scope="col">ID PETUGAS</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">NAMA</th>
      <th scope="col">ID LEVEL</th>
      <th scope="col">AKSI</th>


    </tr>
  </thead>
      
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>	
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Detail</a>
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Edit</a>
      <button class="btn btn-light" style="margin-bottom: 10px;">Hapus</button>
</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
<td>	
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Detail</a>
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Edit</a>
      <button class="btn btn-light" style="margin-bottom: 10px;">Hapus</button>
</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
<td>	
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Detail</a>
      <a href="" class="btn btn-light" style="margin-bottom: 10px;">Edit</a>
      <button class="btn btn-light" style="margin-bottom: 10px;">Hapus</button>
</td>
    </tr>
  </tbody>
</table>
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</body>
</html>