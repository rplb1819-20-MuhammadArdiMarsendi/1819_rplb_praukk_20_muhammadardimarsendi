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
                            <p class="h4">Edit <b>Petugas</b></p>
                        </div>
                        <br>
                      
				
				 <form action="{{route('ProsesEdit.petugas',$petugas->id)}}" method="POST">
			      @method('patch')
			      @csrf
				  <div class="form-group">
					 	<label for="level_id">id Level  :  </label>
					 	
   					 	<select class="form-control" name="level_id"  id="level_id">
				 		 @foreach ($level as $value)
     				 	<option value="{{$value->id}}" @if (old('level_id',$petugas->level_id) == $value->id) selected="selected" 
						  @endif>{{$value->nama_level}}</option>
						@endforeach
						</select>
						</div>
					<div>
						<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" id="username" value="{{$petugas->username}}">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" class="form-control"value="{{$petugas->password}}" id="password">
						</div>
					<div>
					<div>
						<div class="form-group">
						<label for="nama_petugas">Nama Petugas</label>
						<input type="nama_petugas" name="nama_petugas" class="form-control"value="{{$petugas->nama_petugas}}" id="nama_petugas">
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

