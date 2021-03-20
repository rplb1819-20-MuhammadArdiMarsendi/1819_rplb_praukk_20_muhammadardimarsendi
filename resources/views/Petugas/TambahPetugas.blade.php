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
                            <p class="h4">Tambah <b>Petugas</b></p>
                        </div>
                        <br>
                      
				
				<form action="{{route('Proses.petugas')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
					 	<label for="level_id">Nama Level  :  </label>
					 	 @error('level_id') <span style="color: red">{{$message}}</span>@enderror
   					 	<select class="form-control" name="level_id"  id="level_id">
     				 	<option >pilih</option>
     				 	@foreach ($level_id as $value)
     				 	<option value="{{$value->id}}">{{$value->nama_level}}</option>
						@endforeach
    					</select>
    				</div>
					<div>
						<div class="form-group">
						<label for="username">Username</label>
						<input type="username" name="username" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="nama_petugas">Nama Petugas</label>
						<input type="nama_petugas" name="nama_petugas" class="form-control">
					</div>
					
					<div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" >Tambah</button>
				</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
