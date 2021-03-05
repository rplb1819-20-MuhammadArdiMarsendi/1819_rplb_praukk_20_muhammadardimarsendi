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
                            <p class="h4">Edit <b>Level</b></p>
                        </div>
                        <br>
                      
				
				 <form>
					<div class="form-group">
						<label for="id_rute">ID LEVEL</label>
						<input type="id_rute" name="id_rute" class="form-control">
					</div>
						<div class="form-group">
						<label for="id_level">NAMA LEVEL</label>
						<input type="id_level" name="id_level" class="form-control">
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
