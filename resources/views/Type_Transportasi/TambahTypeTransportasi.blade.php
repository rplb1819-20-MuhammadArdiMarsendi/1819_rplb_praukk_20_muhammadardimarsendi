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
                            <p class="h4">Tambah <b>Type Transportasi</b></p>
                        </div>
                        <br>
                        <form action="{{route('Proses.type')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="nama_type">NAMA TYPE</label>
						<input type="nama_type" name="nama_type" class="form-control">
					</div>
						<div class="form-group">
						<label for="keterangan">KETERANGAN</label>
						<input type="keterangan" name="keterangan" class="form-control">
						</div>
					<div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
