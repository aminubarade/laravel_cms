<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ theme('css/frontend.css')}}">
    <script type="text/javascript" src="{{theme('js/all.js')}}"></script>
	<title>@yield('title')&mdash; CMSAminu </title>
</head>
<body>
	<style type="text/css">
		body {
    	font-family: 'Dosis', sans-serif;
      }
	</style>
	<nav class="navbar navbar-toggleable-md navbar-fixed-top navbar-default" role="navigation" style="background-color: white;">
		<div class="container">
			<div class="col-md-12">
				<div class="navbar-header"><a href="/" class="navbar-brand">
					<img src="{{theme('images/logo.png')}}" alt="logo" ></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#team" class="nav-link">Project</a></li>
					<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="#" class="nav-link">About</a></li>				
				</ul>
			</div>
		</div>
	</nav>


<!-- signinup Script -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mission').on('click', function(){
				$('#signin-form').toggle();
			});

			$("#vision").on('click', function(){
				$('#signup-form').toggle();
			});
		});
	</script>
<!-- -->


	<!--Top Header -->
	<div id="home" class="home" style="margin-top: 50px">
		<a href="martinsprobity.com"><img src="{{theme('images/logo.png')}}" class="img-responsive header-logo-img"></a>
		<div class="header-btn-container">
			<button id="mission" class="btn btn-primary header-btn">Signin</button>
			<button id="vision" class="btn btn-primary header-btn">Signup</button>
		</div>
	
		<div class="invis">
			<form method="post" action="{{route('login')}}" id="signin-form" style="display: none;">
				{{ csrf_field() }}
			   <div class="form-group">
			         <label for='email'>Email:</label>
			         <input type="email" name="email" class="form-control" {{-- required="true" --}}>
			   </div>
			   <div class="form-group">
			         <label for='password'>Password:</label>
			         <input type="password" name="password" class="form-control">
			   </div>
			   <input type="submit" name="login" class="btn btn-primary" required="true">
			   <a href="{{route('password.reset')}}" class="small">Forgot Password</a>

			</form>
		</div>
		<div class="invis2">
			<form id="signup-form" style="display: none; ">

			</form>
		</div>
	</div>


	<!--Services -->
	<div id="services">
	<div  class="container text-center">
			<h1>Services</h1>
			<div class="col-md-4">
				<div class="services-img-box">
				<img src="{{theme('images/tech1.jpg')}}" alt="image" class="img-responsive services-img">
				</div>
				<h3>Learning</h3>
				<div class="services-box">
				<p>
					Put Some Text description here
				</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="services-img-box">
				<img src="{{theme('images/men.jpg')}}" alt="image" class="img-responsive services-img">
				</div>
				<h3>Hardware</h3>
				<div class="services-box">
				<p>
					Put Some Text description here
				</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="services-img-box">
					<img src="{{theme('images/tech2.jpg')}}" alt="image" class="img-responsive services-img">
					</div>
					<h3>Coding</h3>
					<div class="services-box">
					<p>
						Put Some Text description here
					</p>
					</div>
			</div>	
		</div>
	</div>


	<!--Products -->
	<div id="products" class="container text-center">
		<hr>
		<h1>Simple Layout</h1>
		<div class="col-md-12">
			<h3>Aminu Barade</h3>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<img src="{{theme('images/laravel.png')}}" alt="image" class="img-responsive">
				
			</div>
			<div class="col-md-4" style="text-align: justify;">
			</div>
		</div>
		<hr>	
	</div>

<!--TEAM-->
	{{-- <div  id="team" >
	<div class="container text-center">
			<h1>Team</h1>
			<div class="row">
			<div class="col-md-3">
				<div class="team-img">
				<img src="{{theme('images/logo.png')}}" alt="logo" height="100%" width="100%">
				</div>
			</div>
				
			<div class="col-md-3">
				<div class="team-img">
				<img src="{{theme('images/logo.png')}}" alt="logo" height="100%" width="100%">
				</div>
			</div>

				
			<div class="col-md-3">
				<div class="team-img">
				<img src="{{theme('images/logo.png')}}" alt="logo" height="100%" width="100%">
				</div>
			</div>
				
			<div class="col-md-3">
				<div class="team-img">
				<img src="{{theme('images/logo.png')}}" alt="logo" height="100%" width="100%">
				</div>
			</div>
		</div>
	</div>
	</div> --}}


	<!-- Contact -->
	<br>

	<div id="contact">
		
			<div id="contact-cont" class="container text-center">
				<div id="map" class="col-md-6">
					<h5>Leave a Message</h5>
					<form>
						<div class="form-group">
							<input type="text" name="fullname" placeholder="Fullname" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="subject" placeholder="Subject" class="form-control">
						</div>
						<div class="form-group">
							<textarea placeholder="Your Feedback"  class="form-control"></textarea>
						</div>
							<input type="submit" class="btn btn-primary form-control" name="fullname" placeholder="Fullname">
					</form>
				</div>

				<div class="col-md-6">
					
				</div>
			</div>
		
	</div>
	
<footer class="web-footer navbar-default bg-inverse text-center" style="margin-top: 55px">
		<span style="line-height: 50px; margin: auto;">&copy; Copyright 2017,<a href="https://www.aminubarade.github.io/"> Aminu Barade.</a></span>
	</footer>
</body>
</html>