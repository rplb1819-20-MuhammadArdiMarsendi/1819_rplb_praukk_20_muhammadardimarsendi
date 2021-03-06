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
                            <p class="h4">TICKET<b>PEDIA</b></p>
                        </div>
                        <br>
						<form method="POST" 
						action="{{route('Proses.Login')}}"
						 autocomplete="off">
							 @csrf
						        {{csrf_field()}}
                            <div class="form-group">
                            <label for="InputName">Name</label>
                                <input type="text" class="form-control" name="username" placeholder="username" id="InputName">
                            </div>
                            <br>

                            <div class="form-group">
					          <label for="InputPassword">Password</label>

                                <input type="password" class="form-control" name="password" placeholder="password" id="InputPassword">
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                            <button type="submit" id="sendlogin" class="btn btn-primary">Login</button id="button">
                            	<a href="{{route('Register')}}" id="button">Create an account</a>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
