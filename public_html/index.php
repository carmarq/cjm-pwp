<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!--Font Awesome-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

		<!--CSS Stylesheet-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

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
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One">
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
			<div class="container nav-font">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" id="navfont">Carlos Marquez</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon nav-fon"></span>
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
						<div class= "col-sm-12">
							<p class="text-center para-font">
							Hi, I'm Carlos. I'm enrolled in a full-stack web development boot camp!! This page will be updated as time passes to document my work. Please look at my projects down below and feel free to contact me as well. <br> Thank you!
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

	<section> <!--Projects Section Starts Here-->
		<div class="projects shadow">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<h2 class="text-right">Projects</h2>
						<p class="text-center para-font">Capstone:
						<br>
						For about two months I worked with friends on an application for the capstone of my coding boot camp. The application lets users look up Albuquerque breweries based on specific search criteria for preference of drink. Those same breweries can moderate their own page, too.
						</p>
						<br>
						<p class="text-center para-font">Knights of Node:
						<br>
						From May 18th - May 20th, 2018 I participated in Angular Attack, a 48-hour hack-a-thon. A team of up to four has 48 hours to make any Angular application they want. The application that we made was a game where the player would take the role as the Angular knight to fight React dragons.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


		<!--Contact Section Starts Here-->
		<section>
			<div id="join-container" class="pt-lg-6 pb-lg-6 pt-5 contact-sty">
				<div class="container">
					<h2 class="text-left">Contact</h2>
					<form id="dmsc-form" action="php/mailer.php" method="post">

						<div class="form-group row pt-lg-5 pb-lg-3 pt-5">
							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="contactName" class="formfont">Name</label>
								<input type="text" class="form-control mb-4" id="dmscName" name="dmscName" placeholder="Enter name here..." required="required">
							</div>

							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="email" class="formfont">Email Address</label>
								<input type="email" class="form-control mb-4" id="dmscEmail" name="dmscEmail" placeholder="Your email address..." required="required">
							</div>

							<div class="col-sm-12 col-md-6 offset-md-3">
								<label for="message" class="formfont">Message</label>
								<textarea class="form-control" id="dmscMessage" name="dmscMessage" rows="4" placeholder="Type your message here..."></textarea>
							</div>
						</div>

						<!--reCAPTCHA-->
						<div class="d-flex justify-content-center">
							<div class="g-recaptcha" data-sitekey="6LcDZlwUAAAAAN9xUy3yIvS2l58L9cRYOO85vTzt"></div>
						</div>

						<div class="text-center">
							<button class="btn btn-success btn-lg mt-3 mb-3 text-center" type="submit">Submit</button>
							<button class="btn btn-lg mt-3 mb-3 text-center" type="reset">Reset</button>
						</div>

					</form>
					<div class="row">
						<div class="col-xs-6">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
	</section>

		<footer class="py-4 text-black foot-font text-center">
			<div class="container ">
				<a class="text-black" href="https://www.linkedin.com/in/carjmarq/" target="_blank">LinkedIn</a> | <a class="text-black" href="https://github.com/carmarq" target="_blank">GitHub</a> | <a class="text-black" href="https://twitter.com/carjmarq" target="_blank">Twitter</a>
			</div>
		</footer>

	</body>
</html>
