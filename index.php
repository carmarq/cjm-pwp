<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" 		crossorigin="anonymous">

		<!--Font Awesome Glyphs-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

		<!--CSS Stylesheet-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!--JQuery first, Popper.js second, and Bootstrap Js  third-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 	 		crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--form validate js-->
		<script src="js/form-validate.js"></script>

		<title>Carlos Marquez, Junior Developer</title>

	</head>

<body>

<!--Nav Bar Begins Here-->
	<div class="nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<nav class="navbar navbar-expand-lg">
								<a class="navbar-brand">Carlos Marquez</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--About Me Section Starts Here-->
	<div class="dmscus">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-12 col-lg-12"></div>
				<p class="text-center">About Me:<br>
		Hi, I'm Carlos! I'm currently enrolled in a fullstack web development boot camp. This page will be updated as time passes to document my work. Please look at my projects down below and feel free to contact me as well. Thank you!
				</p>
			</div>
		</div>
	</div>


	<!--Projects Section Starts Here-->
	<div class="projects">
		<div class="container">
			<div class="row">
			<div class="col-xs-6 col-sm-12 col-lg-12">
				<h2 class="text-right">Projects</h2>
		<p class="text-center">Capstone:
		<br>
		For about two months I worked with friends on an application for the capstone of my coding boot camp. The application lets users look up Albuquerque breweries based on specific search criteria for preference of drink. Those same breweries can moderate their own page, too.
		</p>
		<p class="text-center">Knights of Node:
		<br>
		From May 18th - May 20th, 2018 I participated in Angular Attack, a 48-hour hack-a-thon. A team of up to four has 48 hours to make any Angular application they want. The application that we made was a game where the player would take the role as the Angular knight to fight React dragons.
		</p>
			</div>
			</div>
		</div>
	</div>

	<!--Contact Section Starts Here-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 form">
					<h2>Contact</h2>

					<form method="post" action="php/mailer.php" class="contact" id="contact">
					<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" class="form-control" placeholder="Enter name here..." style="width:25vh" required="required" data-error="Please enter your name">
					</div>

					<div class="form-group">
					<label for="e-mail">E-mail</label>
					<input type="text" id="e-mail" class="form-control" placeholder="Enter E-mail here..." style="width: 25vh" required="required" data-error="Please enter your e-mail">
					</div>

					<div class="form-group">
					<label for="message">Message</label>
					<textarea id="message" class="form-control" name="message" placeholder="Write something here..." style="width:50vh" required="required" data-error="Please don't fuck with me"></textarea>
					</div>

					<div class="col-xs-6 form">
						<a href="mailto:carl.marq95@gmail.com" target="_blank">
							<i class="fas fa-envelope-square fa-3x"></i>
						</a>
						<a href="https://twitter.com/carmarq" target="_blank">
							<i class="fab fa-twitter-square fa-3x"></i>
						</a>
						<a href="https://www.linkedin.com/in/carmarq/" target="_blank">
							<i class="fab fa-linkedin fa-3x"></i>
						</a>
						<a href="https://github.com/carmarq/" target="_blank">
							<i class="fab fa-github-square fa-3x"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

	<iv> class="bottom" id="bottom">
	<!-- reCAPTCHA -->
	<div class="g-recaptcha" data-sitekey="6LcDZlwUAAAAAN9xUy3yIvS2l58L9cRYOO85vTzt"></div>

	<button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> Send</button>
	<button class="btn" type="reset"><i class="fas fa-ban"></i> Reset</button>
	</div>

						<!--Contact Section Ends here-->
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		 	</div>
		</div>
</body>
</html>