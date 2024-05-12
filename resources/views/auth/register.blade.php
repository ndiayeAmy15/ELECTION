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
	<link rel="stylesheet" href="{{ asset('assets/app.css')  }}">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome Back</h1>
                    <p class="sub-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <h2>Log In</h2>
							<form action="{{route('register')}}" method="post" id="form-register" >
								@csrf
									<div class="input-group">
										<span><i class="fa fa-user" aria-hidden="true"></i></span>
										<input type="text" placeholder="firstname" name="firstname" required="">
										<small class="text-danger fw-bold" id="error-register-firstname"></small>
									</div>
									<div class="input-group">
										<span><i class="fa fa-user" aria-hidden="true"></i></span>
										<input type="text" placeholder="lastname" name="lastname" required="">
										<small class="text-danger" id="error-register-lastname"></small>
									</div>
									<div class="input-group">
										<span><i class="fa fa-user" aria-hidden="true"></i></span>
										<input type="text" placeholder="adresse" name="adresse" required="">
										<small class="text-danger" id="error-register-adresse"></small>
									</div>
									<div class="input-group">
										<span><i class="fa fa-user" aria-hidden="true"></i></span>
										<input type="text" placeholder="cni" name="cni" required="">
										<small class="text-danger" id="error-register-cni"></small>
									</div>

									<div class="input-group">
										<span><i class="fa-sharp fa-solid fa-envelope" aria-hidden="true"></i></span>
										<input type="email" placeholder="Email" name="email" required="">
										<small id="error-register-email" class="text-danger"></small>
									</div>
									{{-- <div class="input-group">
										<span><i class="fas fa-user"  aria-hidden="true"></i></span>
										<select name="profilU" id="profilU" placeholder="Profil" required="">
											<option value=""></option>
											<option value="admin">Admin</option>
											<option value="user">Utilisateur</option>
										</select>
										<small class="text-danger fw-bold" id="error-register-profil"></small>
									</div> --}}

									<div class="input-group two-groop">
										<span><i class="fa fa-key" aria-hidden="true"></i></span>
									<input type="Password" name="password" placeholder="Password" required="">
									<small id="error-register-password" class="text-danger"></small>
									</div>
								<div class="input-group two-groop">
									<span><i class="fa fa-key" aria-hidden="true"></i></span>
									<input type="Password" name="confirm_password" placeholder="Confirm Password" required="">
								</div>

								<div class="form-row bottom">
									<div class="form-check">
										<input type="checkbox" id="remenber" name="remenber" value="remenber" class="checkbox" required="" id="agree-terms"  name="agree-terms" role="switch">
										<label for="remenber"class="form-check-label">agree terms</label>
										<small id="error-register-agree-terms" class="text-danger">
											<small id="error-register-confirm_password" class="text-danger"></small>
									</div>
									<a href="#url" class="forgot"></a>
								</div>



								<button class="btn btn-primary btn-block" type="submit" id="register-user">Log In</button>
							</form>

                    <a href="{{route('login')}}"> have an account? Register</a>
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


	<script src="{{ asset('assets/user/user.js')  }}"></script>
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
	<title>@yield('title')</title>
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
		<div class="row">
		<div class="col-md-6 mx-auto">
		<form action="{{route('register')}}" method="post">
			@csrf
			<h2>Register Now
				<i class="fas fa-level-down-alt"></i>
			</h2>

				<div class="col-md-6 ">
					<div class="form-style-agile col-md-6">
						<label>
							<i class="fas fa-user"></i>
							Username
						</label>
						<input placeholder="Username" name="username" type="text" required="">
					</div>
			   </div>
			   <div class="col-md-6 ">
                <div class="form-style-agile  col-md-6">
                    <label>
                        <i class="fas fa-user"></i>
                        Lastname
                    </label>
                    <input placeholder="Username" name="lastname" type="text" required="">
                </div>


			<div></div>
            <div class="form-style-agile col-md-6">
				<label>
					<i class="fa-sharp fa-solid fa-envelope"></i>
					Email
				</label>
				<input placeholder="email" name="email" type="text" required="">
			</div>
            <div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					Profil
				</label>
				<section name="profilU" id="profilU">
					<option value=""></option>
					<option value="admin">Admin</option>
					<option value="user">Utilisateur</option>
				</section>

			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="password" type="password" required="">
			</div>
            <div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Confirme your Password
				</label>
				<input placeholder="Password" name="password" type="password" required="">
			</div>
           </div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="" id="agree-terms"  name="agree-terms" role="switch">
							<label for="" class="form-check-label">agree terms</label>
						    <small id="error-register-agree-terms" class="text-danger"></small>
						</label>
					</li>
					<li>
						<a href="{{route('login')}}">log in if you have an account</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In">


		</form>
	</div>
	</div>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Effect Login Form. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
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
