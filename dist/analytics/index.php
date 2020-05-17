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
		<div class="container-main">
			<div class="row no-gutters category-box d-flex flex-wrap align-items-start">

			<div class="col-12 col-md-6">
				<div class="card border-light">
					<div class="card-header">Declaration Form</div>
					<div class="card-body">
					<h5 class="card-title">Information rights</h5>
						<p class="card-text font-weight-light">An organization that collects information about their users must provide them with clear information about the usage of their data and rights.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Declaration</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="card border-light">
					<div class="card-header">Opposition Form</div>
					<div class="card-body">
					<h5 class="card-title">Opposition rights and procedures</h5>
						<p class="card-text font-weight-light">Users can reject at any time to an organization using some of their data, this is especially common when data is used for commercial purposes.</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/opposition/opposition.php" class="btn ml-2 btn-primary">Go to Opposition</a>
					</div>
				</div>
				</div>

				<div class="col-12 col-md-6">
				<div class="card border-light">
					<div class="card-header">Verification Form</div>
					<div class="card-body">
						<h5 class="card-title">Verification rights</h5>
						<p class="card-text font-weight-light">
                            Users can ask an organization if it has data about them (website, store, bank, etc.) and request that it be communicated to them to verify its content.
						</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/verification/verification.php" class="btn ml-2 btn-primary">Go to Verification</a>
					</div>
				</div>
				</div>

				<div class="col-12 col-md-6">
				<div class="card border-light">
					<div class="card-header">Rectification Form</div>
					<div class="card-body">
						<h5 class="card-title">Rectification rights</h5>
						<p class="card-text font-weight-light">
						    Users can request the rectification of inaccurate or incomplete information concerning them. It helps to prevent an organization from using or disseminating false information about them.
						</p>
					</div>
					<div class="card-footer d-flex flex-row align-items-center">
						<div class="progress flex-grow-1">
							<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<a href="/analytics/declaration/declaration.php" class="btn ml-2 btn-primary">Go to Rectification</a>
					</div>
				</div>
				</div>

			</div>
		</div>
	</div>

	<?php include("../includes/footer.inc.php"); ?>
</body>

</html>
