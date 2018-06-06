<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!--Font Awesome-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

		<!--CSS Stylesheet-->
		<link rel="stylesheet" href="../css/style.css" type="text/css">

		<!--JQuery first, Popper.js second, and Bootstrap Js  third-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
				  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
				  crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
				  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
				  crossorigin="anonymous"></script>

		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

		<!-- jQuery Form, Additional Methods, Validate -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--form validate js-->
		<script src="./js/form-validate.js"></script>

		<title>Carlos Marquez, Junior Developer</title>

	</head>

	<body>

		<header id="navigation">
		<!--Nav Bar Begins Here-->
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="#">Carlos Marquez</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="https://github.com/carmarq">GitHub<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.linkedin.com/in/carjmarq/">LinkedIn</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://twitter.com/carjmarq">Twitter</a>
							</li>

						</ul>
					</div>
				</nav>
			</div>

		</header>

		<section> <!--About Me Section Starts Here-->
			<div class="dmscus">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-12 col-lg-12">
							<p class="text-center">About Me:<br>
							Hello, I'm Carlos. I'm currently enrolled in a fullstack web development boot camp. This page will be updated as time passes to document my work. Please look at my projects down below and feel free to contact me as well. Thank you!
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

	<section> <!--Projects Section Starts Here-->
		<div class="projects">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-12 col-lg-12">
						<h2 class="text-right">Projects</h2>
						<p class="text-center">Capstone:
						<br>
						For about two months I worked with friends on an application for the capstone of my coding boot camp. The application lets users look up Albuquerque breweries based on specific search criteria for preference of drink. Those same breweries can moderate their own page, too.
						</p>
						<br>
						<p class="text-center">Knights of Node:
						<br>
						From May 18th - May 20th, 2018 I participated in Angular Attack, a 48-hour hack-a-thon. A team of up to four has 48 hours to make any Angular application they want. The application that we made was a game where the player would take the role as the Angular knight to fight React dragons.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


		<main class="container pb-5" id="contactContainer">
			<div class="row">
				<div class="col-xs-6" >

		 <!--Contact Section Starts Here-->
			<form method="post" action="php/mailer.php" class="row" id="contact">
				<div class="col-xs-6 form">
					<h2>Contact</h2>
						</div>

						<div class="form-group">
							<label for="name">Name</label>
							<div class="input-group">
								<div class="input-group-prepend">
							<input type="text" name="name "id="name" class="form-control" placeholder="Enter name here..."
									 style="width:25vw" required="required">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email">E-mail</label>
							<div class="input-group">
								<div class="input-group-prepend">
								<input type="text" id="email" class="form-control" name="email" placeholder="Enter E-mail here..." style="width: 25vw" required="required">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="message">Message</label>
							<div class="input-group">
								<div class="input-group-prepend">
								<textarea id="message" class="form-control" name="message" placeholder="Write something here..." style="width:50vw" required="required"></textarea>
								</div>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LcDZlwUAAAAAN9xUy3yIvS2l58L9cRYOO85vTzt"></div>

						<button class="btn btn-success" type="submit"><i class="fas fa-paper-plane"></i> Send</button>
						<button class="btn" type="reset"><i class="fas fa-ban"></i> Reset</button>


						</form>
					<div id="output-area"></div>
				<!--Contact Section Ends here-->
				</div>
			</div>
		</main>
	</body>
</html>
