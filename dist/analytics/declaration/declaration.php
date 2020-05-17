<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../styles/index.css" />
	<link rel="stylesheet" href="./declaration.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>GDPR-Checker - Contact</title>
</head>
<body>
    <?php include("../../includes/header.inc.php"); ?>

    <div class="scroller" id="source">

        <div class="main">
            <div class="declaration-container">
                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex image-balance">
                        <img class="ml-3" width="250px" src="../../assets/image-balance.svg"/>
                    </div>
                    <div class="d-flex flex-column align-items-center col h-100">
                        <button class="btn btn-primary"><a href="/analytics/index.php" class="text-light">Return to analytics</a></button>
                        <div class="scroller">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfSt8pqpVLGDnwA6XqYmKaiXUEvs24lVE5lOFLkgZSfQn6TtQ/viewform?embedded=true"
                                id="target" width="80vw" height="100vh" frameBorder="0" marginHeight="0" marginWidth="0" class="scroller">Chargement…
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    (function() {
      var target = $("#target");
      $("#source").scroll(function() {
        target.prop("scrollTop", this.scrollTop)
              .prop("scrollLeft", this.scrollLeft);
      });
    })();
  </script>
