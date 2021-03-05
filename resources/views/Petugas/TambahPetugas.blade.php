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
                      
				
				<form>
					<div class="form-group">
						<label for="email">ID PETUGAS</label>
						<input type="email" name="email" class="form-control">
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
						<label for="namapenumpang">Nama Petugas</label>
						<input type="namapenumpang" name="namapenumpang" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="id_level">ID LEVEL</label>
						<input type="id_level" name="id_level" class="form-control">
						</div>
					<div>
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
