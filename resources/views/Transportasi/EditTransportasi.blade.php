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
                            <p class="h4">Edit <b>Transportasi</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('ProsesEdit.transportasi', $transportasi->id)}}" method="post" enctype="multipart/form-data">					
			        @csrf
			        @method('patch')
					<div class="form-group">
					 	<label for="type_transportasi_id">ID Type  :  </label>
   					 	<select class="form-control" name="type_transportasi_id"  id="type_transportasi_id" required>
     				 	<option >pilih</option>
     				 	@foreach ($type_transportasi as $value)
     				 	<option value="{{$value->id}}">{{$value->nama_type}}</option>
						@endforeach
    					</select>
    				</div>
 					
					<div>
						<div class="form-group">
						<label for="kode_transportasi">kode</label>
						 @error('kode_transportasi') <span style="color: red">{{$message}}</span>@enderror
						<input type="text" name="kode_transportasi" id="kode_transportasi" value="{{$transportasi->kode_transportasi}}" class="form-control">
						</div>
			
						<div class="form-group">
						<label for="jumlah_kursi">Jumlah Kursi</label>
						 @error('jumlah_kursi') <span style="color: red">{{$message}}</span>@enderror
						<input type="number" name="jumlah_kursi" id="jumlah_kursi" value="{{$transportasi->jumlah_kursi}}" class="form-control">
						</div>
				
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						 @error('keterangan') <span style="color: red">{{$message}}</span>@enderror
						<input type="text" name="keterangan" id="keterangan" value="{{$transportasi->keterangan}}" class="form-control">
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
