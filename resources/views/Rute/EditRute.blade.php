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
                            <p class="h4">Edit <b>Rute</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('ProsesEdit.rute',$rute->id)}}" method="POST">
					@method('patch')
			        @csrf
    				<div class="form-group">
					 	<label for="transportasi_id">kode transportasi  :  </label>
					 	<!--  @error('transportasi_id') <span style="color: red">{{$message}}</span>@enderror -->
   					 	<select class="form-control" name="transportasi_id"  id="transportasi_id">
     				 	<option >pilih</option>
     				 	@foreach ($transportasi as $value)
     				 	<option value="{{$value->id}}" @if (old('transportasi_id',$rute->transportasi_id) == $value->id) selected="selected" 
						  @endif>{{$value->kode_transportasi}}</option>
						@endforeach
    					</select>
    				</div>

					<div class="form-group">
						<label for="kota_awal">KOTA AWAL</label>
						<input type="text" name="kota_awal" id="kota_awal" value="{{$rute->kota_awal}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="kota_akhir">KOTA AKHIR</label>
						<input type="text" name="kota_akhir" id="kota_akhir" value="{{$rute->kota_akhir}}"  class="form-control">
					</div>

					<div class="form-group">
						<label for="rute_awal">RUTE AWAL</label>
						<input type="text" name="rute_awal" id="rute_awal" value="{{$rute->rute_awal}}"  class="form-control">
					</div>

					<div class="form-group">
						<label for="rute_akhir">RUTE AKHIR</label>
						<input type="text" name="rute_akhir" id="rute_akhir" value="{{$rute->rute_akhir}}"  class="form-control">
					</div>
		
					<div class="form-group">
						<label for="jam_cekin">Jam cekin</label>
						<input type="time" name="jam_cekin" id="jam_cekin" value="{{$rute->jam_cekin}}" class="form-control">
					</div>

					<div class="form-group">
						<label for="jam_berangkat">Jam berangkat</label>
						<input type="time" name="jam_berangkat" id="jam_berangkat" value="{{$rute->jam_berangkat}}"  class="form-control">
					</div>
				    
					<div class="form-group">
						<label for="tanggal_berangkat">Tanggal berangkat</label>
						<input type="date" name="tanggal_berangkat" value="{{$rute->tanggal_berangkat}}"  id="tanggal_berangkat" class="form-control">
					</div>
					
						<div class="form-group">
						<label for="harga">HARGA</label>
						<input type="number" name="harga" id="harga" value="{{$rute->harga}}" class="form-control">
					</div>
					
					
					<div class="text-center">
						<button class="btn btn-primary">Edit</button>
				</form>
 						</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
