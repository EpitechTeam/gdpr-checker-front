<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/index.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<title>GDPR-Checker</title>
</head>

<body>
	<div class="position-absolute d-flex flex-row w-100">
		<div class="w-100 px-5 py-4 navbar d-flex flex-row align-items-center">
			<div><img src="./assets/logo.svg" alt="logo" onclick="window.location='index.html';"/></div>
			<div class="nav-items d-flex flex-row align-items-center">
				<div>About Us</div>
				<div class="ml-4">Find a consultant</div>
				<div class="ml-4">Simulation</div>
				<div class="ml-4">Contact</div>
			</div>
		</div>
	</div>
	
	<?php include("./includes/header.inc.php"); ?>

	<div class="main">
		<div class="container">
			<div class="d-flex flex-row align-items-center row h-100">
				<div class="d-flex flex-row mb-5">
					<div class="col d-flex flex-column align-items-center">
						<div class="flex-shrink-0">
							<div class="font-weight-bold">
								<h1>GDPR Compliance Checker</h1>
							</div>
							<div class="font-weight-light">Run a free website scan to see the cookies you're setting or
								allowing others to set, and who you're sending user data to.</div>
							<div class="mt-4 d-flex flex-row">
								<input class="main-input" type="text" placeholder="https://www.yourdomain.com/" />
								<button class="scan-btn">SCAN</button>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<img class="ml-3 main-image" src="./assets/image-balance.svg" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-2">
		<div class="container d-flex justify-content-center">
			<img class="section-2-img" src="./assets/section-2.svg" alt="features">
		</div>
	</div>

	<div class="section-3 mt-5 position-relative">
		<div class="container d-flex flex-column justify-content-center">
			<div class="row">
				<div class="col">
					<img style="float: right;" src="./assets/section3/1.svg" alt="find-consultant">
				</div>
				<div class="col">
					<div>Take care of the core parts achieving a GDPR compliant website</div>
					<div class="font-weight-light">Blah blah blah</div>
					<div><button type="button" class="btn btn-primary mt-3">Find out more</button></div>
				</div>
			</div>


			<div class="row step1">
				<div class="col d-flex flex-column justify-content-center">
					<img src="./assets/section3/step1.svg" alt="step 1">
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
				<div class="col">
					<img src="./assets/section3/manonphone.svg" alt="man-on-phone">
				</div>
			</div>

			<div class="row step2">
				<div class="col">
					<img src="./assets/section3/medecine.svg" alt="medcine">
				</div>
				<div class="col d-flex flex-column justify-content-center">
					<img src="./assets/section3/step2.svg" alt="step 2">
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("./includes/footer.inc.php"); ?>
</body>

</html>
