

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gathering Log In form Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="/frontend/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome Back to SenPolitik.sn</h1>
                    <p class="sub-para">plese log in for acces to the App</p>
                    <h2>Log In</h2>
					@error('email')
							<div class="alert alert-danger" role="alert">
								invaled email 
							</div>
					@enderror
					@error('password')
							<div class="alert alert-danger" role="alert">
								invaled password 
							</div>
					@enderror
                    <form action="{{route('login')}}" method="post">
						@csrf
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email" name="email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    </form>
                
                    <p class="account">Don't have an account? <a href="{{route('register')}}">Register</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2021 Gathering Log In form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div>
        <!-- footer -->
    </div>

</body>

</html>















{{-- <!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="/frontend/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="/frontend/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>SenPolitik.sn</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		@error('email')
			<div class="alert alert-danger" role="alert">
				invaled email 
			</div>
		@enderror
		@error('password')
			<div class="alert alert-danger" role="alert">
				invaled password 
			</div>
		@enderror
		
		<form action="#" method="post">
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label for="email">
					<i class="fas fa-user"></i>
					Email
				</label>
			<input placeholder="Username" name="email" type="text" required value="{{old('email')}}" autocomplete="email" autofocus>
			</div>
			<div class="form-style-agile">
				<label for="password">
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="password" type="password" required="" value="{{old('password')}}">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>remember me</span>
						</label>
					</li>
					<li>
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
				
			</div>
			
			<ul>
				<li>
					<a href="{{route('register')}}">create account</a>
				</li>
				<li>
					<a href="#">Forgot Password?</a>
				</li>
			</ul>
			<!-- //checkbox -->
			<input type="submit" value="Log In">
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Effect Login Form. All rights reserved | Design by
			<a >me</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="/frontend/js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="/frontend/js/canva_moving_effect.js"></script>
	<!-- //effect js -->

</body>

</html> --}}