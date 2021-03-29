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
            <form method="POST" action="{{route('Proses.Register')}}">
            	 {{ csrf_field() }}

            	 		<div class="form-group">
            	 		 <label for="inputEmail"><i class="fas fa-envelope"></i> Email:  </label>
						<input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="inputEmail" name="email" placeholder="Masukan Email"  value="{{old('email')}}" required>
					       @if ($errors->has('email'))
					        <div class="invalid-feedback">  
					            {{ $errors->first('email') }}
					        </div>  
					    @endif
					

						<label for="inputName"><i class="fas fa-user"></i> Username:  </label>
    					<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" name="name" placeholder="Masukan Username" value="{{old('name')}}" required autofocus>
					    @if ($errors->has('name'))
					        <div class="invalid-feedback">  
					            {{ $errors->first('name') }}
					        </div>  
					    @endif
					  </div>
					<div class="form-group">
				    <label for="inputPassword"><i class="fas fa-key"></i> Password:  </label>
				    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="inputPassword" name="password" placeholder="Masukan Password" required>
				     @if ($errors->has('password'))
				        <div class="invalid-feedback">  
				            {{ $errors->first('password') }}
				        </div>  
				    @endif
				  </div>


					<div class="form-group">
				    <label for="inputPassword"><i class="fas fa-key"></i> Confirm Password:  </label>
				    <input class="form-control" type="Password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="inputPassword" name="password_confirmation" placeholder="Konfirmasi Password" required>
				     @if ($errors->has('password_confirmation'))
				        <div class="invalid-feedback">  
				            {{ $errors->first('password_confirmation') }}
				        </div>  
				    @endif
				  </div>
			
						<div class="mt-1 text-center">
						<button type="submit" class="form-control btn btn-primary">Register</button>
					</div>
				</div>
			</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
