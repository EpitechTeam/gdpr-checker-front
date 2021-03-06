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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>GDPR-Checker</title>
</head>

<body>	
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
<!-- Trigger the Modal -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <div id="caption"></div>
  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
</div>
								<input class="main-input" type="text" id="myTextInput" placeholder="https://www.yourdomain.com/" />


								<button  id="envoyer" class="scan-btn">Scan</button>
									<script>
									// Get the modal
                                    var modal = document.getElementById("myModal");
                                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                                    var img = document.getElementById("myImg");
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                  /*  img.onclick = function(){
                                      modal.style.display = "block";
                                      modalImg.src = this.src;
                                      captionText.innerHTML = this.alt;
                                    }
                                 */
                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];

                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                      modal.style.display = "none";
                                    }


                                    function getRandomInt(max) {
                                        return Math.floor(Math.random() * Math.floor(max));
                                    }

                                	$("#envoyer").click( function() {
                                	  let btn = document.getElementById("envoyer");
                                                                       btn.innerHTML = '<img width="40px" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif">'

                                								console.log("EVENT");
                                                                	$.ajax({
                                                                		type: 'POST', // On spécifie la méthode
                                                                		url: 'https://api.gdpr-checker.willally.com/checksite',
                                                                		data: { 'site': document.getElementById("myTextInput").value }, // 'sujet' est la clé accéssible dans ta variable $_POST, donc dans ton script php ==> $_POST['sujet'] et contiendra la valeur de ta variable 'ton_sujet' javascript
                                                                		success: function (response) {
                                                                		 let btn = document.getElementById("envoyer");

                                                                		 btn.innerHTML = "Done"


                                                                		  let img = document.getElementById("myImg");
                                                                          let modalImg = document.getElementById("img01");
                                                                          let captionText = document.getElementById("caption");

                                                                		     modal.style.display = "block";
                                                                		     modal.style.overflow = "scroll";
                                                                             modalImg.src = response.url;
                                                                            captionText.innerHTML = "www.gdpr-checker.willally.com scan: N°" + getRandomInt(20000000);
                                                                			console.log(response); // Conseille d'amis utilise les consoles Firebug ou la console de developpement de ton navigateur ( F12 ) pour mieux comprendre tes erreurs <img src="images/smilies/icon_smile.gif" border="0" alt="" title=":)" class="inlineimg" />
                                                                			}
                                                                		} )
                                                                    });
                                								</script>
							</div>
							<div class="mt-4 text-center">
								Or
							</div>
							<div class="mt-4 d-flex bg-primary">
								<button class="w-100 p-2 btn-check bg-primary" onclick="location.href='/analytics/index.php';"><a class="text-light">Check your GDPR compliance</a></button>
							</div>
						</div>
					</div>
					<div class="col d-sm-flex d-none">
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
					<div class="font-weight-light">The General Data Protection Regulation (GDPR) regulation came into force on May 25, 2018. Organization that are found to be in non-compliance can face significant fines along with costly damage to their brand.</div>
					<div><button type="button" class="btn btn-primary mt-3">Find out more</button></div>
				</div>
			</div>


			<div class="row step1">
				<div class="col d-flex flex-column justify-content-center">
					<img src="./assets/section3/step1.svg" alt="step 1">
					<div>With our service GDPR-Checker, you can see how compliant is your organisation is and what else can you do to be more compliant answering to different forms adapted to your needs.</div>
				</div>
				<div class="col d-none d-sm-block">
					<img src="./assets/section3/manonphone.svg" alt="man-on-phone">
				</div>
			</div>

			<div class="row step2">
				<div class="col d-none d-sm-block">
					<img src="./assets/section3/medecine.svg" alt="medecine">
				</div>
				<div class="col d-flex flex-column justify-content-center">
					<img src="./assets/section3/step2.svg" alt="step 2">
					<div>Our GDPR-Checker Artificial Intelligence will examine the forms you sent and we will give you a detailed report of your needs.</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("./includes/footer.inc.php"); ?>
</body>

</html>
