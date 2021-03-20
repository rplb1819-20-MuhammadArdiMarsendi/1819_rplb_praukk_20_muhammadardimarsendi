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
                            <p class="h4">Edit <b>Type Transportasi</b></p>
                        </div>
                        <br>
                      <form action="{{route('ProsesEdit.type',$data_tipe->id)}}">
						<div class="form-group">
						<label for="nama_type">NAMA TYPE</label>
						<input type="text" name="nama_type" value="{{$data_tipe->nama_type}}" class="form-control">
					</div>
						<div class="form-group">
						<label for="keterangan">KETERANGAN</label>
						<input type="text" name="keterangan" value="{{$data_tipe->keterangan}}" class="form-control">
						</div>
					<div>
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
