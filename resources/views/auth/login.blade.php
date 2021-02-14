<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Login, Unify Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Login</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<!-- Common CSS -->
        {{-- <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        {{-- <link href="{{URL::asset('fonts/icomoon/icomoon.css')}}" rel="stylesheet"> --}}
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="login-bg">

		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                    <form action=""></form>
									<div class="login-box">
										<a href="#" class="login-logo">
											<img src="img/unify-loading.png" alt="Unify Admin Dashboard" />
										</a>

										<div class="input-group">
											<span class="input-group-addon" id="username"><i class="icon-account_circle"></i></span>


                                                <input id="email" type="email" placeholder="Email ID" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

										</div>
										<br>
										<div class="input-group">
											<span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                            <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

										</div>
										<div class="actions clearfix">
											<a href="forgot-pwd.html">Lost password?</a>
									  	<button type="submit" class="btn btn-primary">Login</button>
									  </div>

									  <div class="or"></div>
									  <div class="mt-4">
									  	<a href="{{ route('register') }}" class="additional-link">Don't have an Account? <span>Create Now</span></a>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="login-slider"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<footer class="main-footer no-bdr fixed-btm">
			<div class="container">
				Copyright Unify Admin 2017.
			</div>
		</footer>
	</body>
</html>
