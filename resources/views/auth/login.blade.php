<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kranjo - Login Page</title>
	<link rel="stylesheet" href="/css/app.css">

	{{-- Fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara|Ubuntu:300,400" rel="stylesheet">
</head>
<body>

	{{--  Top bar --}}
{{-- 	<div class="top-bar">
		<div class="container">
			<div class="v-center">
				<span class="logo">
					Kranjo
				</span>

				<div class="right">
					<span class="help">NEED HELP?</span>
				</div>
			</div>
		</div>
	</div> --}}

	{{-- Login box --}}
	<div class="content">
	<div class="logo">
		<img src="/img/logo.png" alt="">
	</div>

		<div class="login">
			<div class="title">
				Hello, there!
			</div>
			<form action="/login" method="post">
			{{ csrf_field() }}
				<div class="input-group">
					<label for="email">Email</label>
					<input id="email" type="text" name="email">
				</div>


				<div class="input-group">
					<label for="password">Password</label>
					<input id="password" type="password" name="password">
				</div>

				<div class="under-fields">
					<div class="remember">
						<input id="remember-me" type="checkbox">
						<label for="remember-me">Remember Me</label>
					</div>

					<div class="forgot">
						<a href="#">Forgot password?</a>
					</div>
				</div>

				<div class="login-button">
					<button>Login</button>
					<span><a href="#">No account?<br>Sign up!</a></span>

				</div>
			</form>
		</div>
	</div>
	<script>
		
	</script>
</body>
</html>