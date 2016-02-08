<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.register.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.css') }}">
    <script src="{{ asset('assets/plugins/modernizr/modernizr.min.js') }}"></script>
</head>
<body>
    <div class="container">
		<div class="wrapper">
			{!! Form::open(array('class' => 'form-signin', 'route' => 'auth.register'))!!}
			    <h3 class="form-signin-heading">New user? Please Sign Up</h3>
				  <hr class="colorgraph"><br>
				  <input type="email" class="form-control" name="email" placeholder="Email" required="" autofocus="" value="{{ old('email') }}"/>
				  <br>
				  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" value="{{ old('username') }}"/>
				  <br>
				  <input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus="" />
				  <input type="password" class="form-control" name="password_confirmation" placeholder="Re-Password" required="" autofocus="" />
				  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Register</button>
				  <br>
				  <a href="{{ route('auth.index') }}">Already registered ?</a>
			{!! Form::close() !!}
		</div>
	</div>
</body>
<script type="text/javascript"> var myPrefix = "{{ asset('') }}"</script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</html>
