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
                            <p class="h4">Tambah <b>Rute</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('ProsesTambah.rute')}}" method="POST">
					@csrf
					<div class="form-group">
					 	<label for="transportasi_id">Nama transportasi  :  </label>
					 	 @error('transportasi_id') <span style="color: red">{{$message}}</span>@enderror
   					 	<select class="form-control" name="transportasi_id"  id="transportasi_id">
     				 	<option >pilih</option>
     				 	@foreach ($transportasi as $value)
     				 	<option value="{{$value->id}}">{{$value->kode_transportasi}}</option>
						@endforeach
    					</select>
    				</div>
						<div class="form-group">
						<label for="kota_awal">KOTA AWAL</label>
						<input type="text" name="kota_awal" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="kota_akhir">KOTA AKHIR</label>
						<input type="text" name="kota_akhir" class="form-control">
						</div>
					<div>
						<div>
						<div class="form-group">
						<label for="rute_awal">RUTE AWAL</label>
						<input type="text" name="rute_awal" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="rute_akhir">RUTE AKHIR</label>
						<input type="text" name="rute_akhir" class="form-control">
					</div>
		
					<div class="form-group">
						<label for="jam_cekin">Jam cekin</label>
						<input type="time" name="jam_cekin" class="form-control">
						</div>
						<div class="form-group">
						<label for="jam_berangkat">Jam berangkat</label>
						<input type="time" name="jam_berangkat" class="form-control">
					</div>
				    
				
						<div class="form-group">
						<label for="tanggal_berangkat">Tanggal berangkat</label>
						<input type="date" name="tanggal_berangkat" class="form-control">
					</div>
						<div class="form-group">
						<label for="harga">HARGA</label>
						<input type="text" name="harga" class="form-control">
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
