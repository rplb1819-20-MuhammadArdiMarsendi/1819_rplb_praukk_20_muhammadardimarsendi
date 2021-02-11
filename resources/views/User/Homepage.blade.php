<!DOCTYPE html>
<html>
<head>
	<title>	HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">

</head>
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

		<div class="jumbotron jumbotron-fluid" >
	  <div class="container">
	  	
	  	<div class="row">	
	  			<div class="col-md-8">
	  				<br>	<br>	<br>
	  				<h4 class="display-4">SELAMAT DATANG DI TRAVELLING</h4>	
	  				<p class="lead">ANDA DAPAT MELAKUKAN PEMESAN TIKET DISINI DENGAN MUDAH</p>
					  
	  			</div>
	  			<div class="col-md-4">
	  				<form action="" method="POST">
	  					<div class="form-group">	
	  							<label>Tujuan Asal</label>
	  							<select name="tujuan" class="form-control">
	  							<option value="">Bekasi</option>
	  							</select>
	  					</div>
	  					<div class="form-group">	
	  							<label>Tujuan Akhir</label>
	  							<select name="tujuan" class="form-control">
	  							<option value="">Jakarta</option>
	  							</select>
	  					</div>
	  							<div class="form-group">	
	  							<label>Tanggal berangkat</label>
	  							<input type="date" class="form-control">
	  							</select>
	  					</div>
	  					<div class="form-group">	
	  							<label>Transportasi</label>
	  							<select name="tujuan" class="form-control">
	  							<option value="">Kereta Api</option>
	  							</select>
	  							<br>	
	  					</div>
	  							<button type="button" class="btn btn-secondary btn-block">CARI TIKET</button>
	  					</form>
	  			</div>
	  	</div>
	    </div>
	    
	</div>
<div class="container"> 
    <h5 class="text2 font-weight-bold text-center" >KONTAK</h5>
</div>
<div class="container mr-4">
  
  <div class="row" id="kontak">
    <div class="foto1 col-md-3 mt-4 ml-5">
      
    <img src="../assets/img/INSTAGRAM.jpg" class="card-img-top" style="width: 50%;">
    <div class="card-body">
      
     <a href="#" class="btn btn-dark " id="sos">instagram</a>
    </div>
  </div>
   <div class="foto2 col-md-3 mt-4 ml-5">
      
    <img src="../assets/img/TWITTER.jpg" class="card-img-top " style="width: 50%;">
    <div class="card-body">
      <a href="#" class="btn btn-dark " id="sos">Twitter</a>
    </div>
  </div>
   <div class="foto3 col-md-3 mt-4 ml-5">
    <img src="../assets/img/FB.jpg" class="card-img-top " style="width: 50%;">
    <div class="card-body">
      <a href="#" class="btn btn-dark " id="sos">Facebook</a>
        </div>
    </div>
  </div>

</div>
</div>
	<div class="container mt-5">
  <h4 class="text-center">TENTANG KAMI</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="footer mt-5 shadow p-5">
  <div>
    <p class="txt3 text-center ">COPTRIGHT TRAVELLING | 2021</p>
  </div>
</div>


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>