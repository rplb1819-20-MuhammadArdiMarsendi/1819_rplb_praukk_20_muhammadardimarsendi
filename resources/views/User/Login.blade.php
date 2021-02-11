<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>

	<div class="container">
		<div class="row content">
			<div class="col-md-6 mb-3">
				<img src="../assets/img/c.svg" class="img-fluid " alt="image">
			</div>
			<div class="col-md-6">
				<h3 class="signin-text mb-3">Sign in</h3>
				
				<form>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div>
						<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
						</div>
					<div>
						<div class="form-group form-check">
						<input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
						<label class="form-check-label" for="checkbox">Remember me</label>
						
						</div>

						<a class="btn btn-class" href="{{route('Register')}}">Register</a>
						<button class="btn btn-class">Login</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</body>
</html>