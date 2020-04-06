<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/index.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>GDPR-Checker</title>
</head>

<body>
	<?php include("../includes/header.inc.php"); ?>

	<div class="category d-flex justify-content-center">
		<div class="container">
			<div class="category-box d-flex flex-wrap align-items-start">

				<div class="card border-light">
					<div class="card-header">Form</div>
					<div class="card-body">
						<h5 class="card-title">Declaration GDPR compliance</h5>
						<p class="card-text font-weight-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Declaration</a>
					</div>
				</div>

				<div class="card border-light">
					<div class="card-header">Form</div>
					<div class="card-body">
						<h5 class="card-title">Opposition GDPR compliance</h5>
						<p class="card-text font-weight-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Declaration</a>
					</div>
				</div>

				<div class="card border-light">
					<div class="card-header">Form</div>
					<div class="card-body">
						<h5 class="card-title">Verification GDPR compliance</h5>
						<p class="card-text font-weight-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Declaration</a>
					</div>
				</div>

				<div class="card border-light">
					<div class="card-header">Form</div>
					<div class="card-body">
						<h5 class="card-title">Rectification GDPR compliance</h5>
						<p class="card-text font-weight-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Declaration</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include("../includes/footer.inc.php"); ?>
</body>

</html>