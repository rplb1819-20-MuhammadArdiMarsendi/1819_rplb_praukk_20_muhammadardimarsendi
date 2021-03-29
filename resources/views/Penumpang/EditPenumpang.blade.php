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
                            <p class="h4">Edit <b>Penumpang</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('ProsesEdit.penumpang',$penumpang->id)}}" method="POST">
			     @method('patch')
			      @csrf
					<div class="form-group">
					 	<label for="route_id">id rute  :  </label>
					 	<!--  @error('transportasi_id') <span style="color: red">{{$message}}</span>@enderror -->
   					 	<select class="form-control" name="route_id"  id="route_id">
     				 	@foreach ($rute as $value)
     				 	<option value="{{$value->id}}" @if (old('route_id',$penumpang->route_id) == $value->id) selected="selected" 
						  @endif>{{$value->kota_awal}}</option>
						@endforeach
    					</select>
    				</div>
					<div>
						<div class="form-group">
						<label for="username">USERNAME</label>
						<input type="username" name="username" class="form-control" value="{{$penumpang->username}}">
						</div>
					<div>
						<div class="form-group">
						<label for="password">PASSWORD</label>
						<input type="password" name="password" class="form-control"  value="{{$penumpang->password}}">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="nama_penumpang">NAMA PENUMPANG</label>
						<input type="text" name="nama_penumpang" class="form-control"  value="{{$penumpang->nama_penumpang}}">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="alamat_penumpang">ALAMAT PENUMPANG</label>
						<input type="text" name="alamat_penumpang" class="form-control"  value="{{$penumpang->alamat_penumpang}}">
					</div>
					<div>
						<div class="form-group">
						<label for="tanggal_lahir">TANGGAL LAHIR</label>
						<input type="date" name="tanggal_lahir" class="form-control" value="{{$penumpang->tanggal_lahir}}">
					</div>

				<div class="form-group">
					 	<label for="jenis_kelamin">Jenis Kelamin  :  </label>
   					 	<select class="form-control" name="jenis_kelamin"  id="jenis_kelamin" >
     				 	<option >pilih</option>
     				 	<option value="laki-laki" {{$penumpang->jenis_kelamin == 'laki-laki' ? 'selected' : ''}}>Laki-Laki</option>
     				 	<option value="perempuan" {{$penumpang->jenis_kelamin == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
    					</select>
    				</div>

					<div class="form-group">
						<label for="telephone">TELEPHONE</label>
						<input type="number" name="telephone" class="form-control"  value="{{$penumpang->telephone}}">
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
