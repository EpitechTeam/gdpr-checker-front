<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/index.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>GDPR-Checker - Contact</title>
</head>

<body>
	<?php include("./includes/header.inc.php"); ?>

	<!-- <div class="main">
		<div class="container contact">
			<div class="d-flex flex-row justify-content-center align-items-center h-100">
				<div class="contact-box">

					<div class="d-flex mt-5 flex-row">
						<form id="contact-form" class="d-flex flex-column w-100">
							<div class="d-flex flex-row">
								<input type="text" class="d-flex font-weight-light flex-grow-1" placeholder="Last name" required/>
								<input type="text" class="ml-3 font-weight-light d-flex flex-grow-1" placeholder="First name" required/>
							</div>
							<div class="d-flex mt-3 flex-row">
								<input type="email" pattern=".+@.+\..{2,3}$" class="d-flex font-weight-light flex-grow-1" placeholder="Email"  required/>
							</div>
							<div class="d-flex mt-3 flex-row">
								<textarea class="flex-grow-1 font-weight-light" name="" id="" cols="30" rows="10" placeholder="Say something" required></textarea>
							</div>
							<div class="d-flex flex-row justify-content-end">
								<button type="submit" class="btn btn-lg btn-primary mt-3">Contact us!</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->
	</div>

	<div class="main d-flex align-items-center">
		<div class="contact container">
			<div class="row no-gutters justify-conter-center">
				<div class="col-12">
					<h1 class="">Get in touch</h1>
				</div>
				<div class="col-12 col-md-6 p-2">
					<input type="text" class="d-flex font-weight-light w-100" placeholder="Last name" required/>
				</div>
				<div class="col-12 col-md-6 p-2">
					<input type="text" class="d-flex font-weight-light w-100" placeholder="Last name" required/>
				</div>
				<div class="col-12 p-2">
					<input type="email" pattern=".+@.+\..{2,3}$" class="d-flex font-weight-light w-100" placeholder="Email"  required/>
				</div>
				<div class="col-12 p-2">
					<textarea class="w-100 font-weight-light" name="" id="" cols="30" rows="10" placeholder="Say something" required></textarea>
				</div>
				<div class="col-12 p-2">
					<button type="submit" class="btn btn-lg btn-primary mt-3 w-100">Contact us!</button>
				</div>
			</div>
		</div>
	</div>

	<?php include("./includes/footer.inc.php"); ?>
</body>

<script type="text/javascript">
	$("#contact-form").submit((e) => {
		e.preventDefault();
		console.log("Thank you for contacting us");
	})
</script>

</html>