<!DOCTYPE html>
<html>
<head>
	<title>Edit Penumpang</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TRAVELLING</a>
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
		<div class="row content">
			<div class="col-md-6 mb-3">
				<img src="../assets/img/f.svg" class="img-fluid " alt="image">
			</div>
			<div class="col-md-6">
				<h3 class="signin-text mb-5" style="text-align: center;">Edit Penumpang</span></h3>
				
				<form>
					<div class="form-group">
						<label for="id_rute">ID PENUMPANG</label>
						<input type="id_rute" name="id_rute" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="tujuan">USERNAME</label>
						<input type="tujuan" name="tujuan" class="form-control">
						</div>
					<div>
						<div class="form-group">
						<label for="username">PASSWORD</label>
						<input type="username" name="username" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="password">NAMA PENUMPANG</label>
						<input type="password" name="password" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="namapenumpang">ALAMAT PENUMPANG</label>
						<input type="namapenumpang" name="namapenumpang" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="namapenumpang">TANGGAL LAHIR</label>
						<input type="date" name="namapenumpang" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="id_level">JENIS KELAMIN</label>
						<input type="id_level" name="id_level" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="id_level">TELEPHONE</label>
						<input type="id_level" name="id_level" class="form-control">
						</div>
					<div>
					<div>
						<button class="btn btn-class">Edit</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</body>
</html>