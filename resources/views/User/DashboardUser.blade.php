<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/Dashboard.css">
</head>

    <title>Dashboard</title>
  </head>
  <body id="page-top">
  @include('layouts.app3')
    </div>
    
   <div class="container">
        <table class="table">
        <h5 class="text-center mb-5" style="font-size:30px;"><span class="font-weight-bold">Rute Hari ini</span></h5>
        

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode Transportasi</th>
                    <th scope="col">kota awal</th>
                    <th scope="col">kota akhir</th>
                   <!--  <th scope="col">rute awal</th>
                    <th scope="col">rute akhir</th> -->
                    <th scope="col">jam cekin</th>
                    <th scope="col">jam berangkat</th>
                    <!-- <th scope="col">Tujuan</th> -->

                    <th scope="col">harga</th>
                   
                </tr>
            </thead>
            @foreach($rute as $dr)
            <tbody>
                <tr>
                    <th scope="row">{{$dr->id}}</th>
                    <td>{{$dr->transportasi->kode_transportasi}}</td>
                    <td>{{$dr->kota_awal}}</td>
                    <td>{{$dr->kota_akhir}}</td>
                   <!--  <td>{{$dr->rute_awal}}</td>
                    <td>{{$dr->rute_akhir}}</td> -->
                    <td>{{$dr->jam_cekin}}</td>
                    <td>{{$dr->jam_berangkat}}</td>
                    <td>{{$dr->harga}}</td>
                    <td class="d-flex justify-content-between">
                        
                        
                        <a href="{{route('Detail.rute',$dr->id)}}"><i class="fas fa-eye"></i></a>
              
                    </td>
                </tr>
                
            </tbody>
            @endforeach
            
        </table>
        <table class="table mt-5">
      

          <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                   <!--  <th scope="col">Password</th> -->
                    <th scope="col">Nama Penumpang</th>
                    <th scope="col">Alamat Penumpang</th>
                    <!-- <th scope="col">Tanggal Lahir</th> -->
                    <!-- <th scope="col">Jenis Kelamin</th> -->
                    <th scope="col">Telephone</th>
                    
                </tr>
            </thead>
            <thead>
              @foreach($penumpang as $dp)
                <tr>
                    <td scope="col">{{$dp->id}}</td>
                    <td scope="col">{{$dp->username}}</td>
                    <!-- <td scope="col">{{$dp->password}}</td> -->
                    <td scope="col">{{$dp->nama_penumpang}}</td>
                    <td scope="col">{{$dp->alamat_penumpang}}</td>
                   <!--  <td scope="col">{{$dp->tanggal_lahir}}</td> -->
                   <!--  <td scope="col">{{$dp->jenis_kelamin}}</td> -->
                    <td scope="col">{{$dp->telephone}}</td>
                   
                </tr>
            </thead>
            @endforeach
        </table>
        
   </div> 
   <div class="container">
   <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="h4">Tambah <b>Penumpang</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('pages.store')}}" method="POST">
					@csrf
				<div class="form-group">
					 	<label for="route_id">Id rute  :  </label>
					 	 <!-- @error('level_id') <span style="color: red">{{$message}}</span>@enderror -->
   					 	<select class="form-control" name="route_id"  id="route_id">
     				 	<option >pilih</option>
     				 	@foreach ($rute as $value)
     				 	<option value="{{$value->id}}">{{$value->id}}</option>
						@endforeach
    					</select>
    				</div>
					<div>
						<div class="form-group">
						<label for="username">USERNAME</label>
						<input type="username" name="username" class="form-control">
						</div>
					<div>
						<div class="form-group">
						<label for="password">PASSWORD</label>
						<input type="password" name="password" class="form-control">
						</div>

						<div class="form-group">
						<label for="">Tujuan</label>
						<input type="text" name="tujuan" class="form-control">
						</div>
					
						<div class="form-group">
						<label for="nama_penumpang">NAMA PENUMPANG</label>
						<input type="text" name="nama_penumpang" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="alamat_penumpang">ALAMAT PENUMPANG</label>
						<input type="text" name="alamat_penumpang" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="tanggal_lahir">TANGGAL LAHIR</label>
						<input type="date" name="tanggal_lahir" class="form-control">
					</div>

				<div class="form-group">
					 	<label for="jenis_kelamin">Jenis Kelamin  :  </label>
					 	<!--  @error('transportasi_id') <span style="color: red">{{$message}}</span>@enderror -->
   					 	<select class="form-control" name="jenis_kelamin"  id="jenis_kelamin">
     				 	<option >pilih</option>
     				 	<option value="laki-laki">Laki-Laki</option>
     				 	<option value="perempuan">Perempuan</option>
    					</select>
    				</div>

					<div class="form-group">
						<label for="telephone">TELEPHONE</label>
						<input type="number" name="telephone" class="form-control">
					</div>
			
					<div class="text-center">
						<button class="btn btn-primary">Tambah</button>
				</form>
                    </div>
                </div>
            </div>
        </div>
        </div>
   </div>
  </div>
  <div>
</div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
