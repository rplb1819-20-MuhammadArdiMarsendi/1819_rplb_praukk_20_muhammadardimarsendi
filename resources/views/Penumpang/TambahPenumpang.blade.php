<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket Pedia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="hold-transition login-page">
    @include('layouts.app2')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="h4">Tambah <b>Penumpang</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('ProsesTambah.penumpang')}}" method="POST">
					@csrf
				<div class="form-group">
					 	<label for="route_id">Id rute  :  </label>
					 	 <!-- @error('level_id') <span style="color: red">{{$message}}</span>@enderror -->
   					 	<select class="form-control" name="route_id"  id="route_id">
     				 	<option >pilih</option>
     				 	@foreach ($rute_id as $value)
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
					<div>
					<div>
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
</body>

</html>
