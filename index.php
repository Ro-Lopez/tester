<!doctype html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- My Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">






		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




		<title>Testing Page</title>

	</head>




	<body>


		<section>

		<nav class="navbar navbar-default">

		<div class="container-fluid">

			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>




				<div class="collapse navbar-collapse" id="main-menu">

					<ul class="nav navbar-nav navbar-left">

						<li>
							<button id="aboutButt">About</button>
						</li>

						<li>
							<button id="contactButt">Contact</button>
						</li>

						<li>
							<button id="busidevButt">Business Development</button>
						</li>

						<li>
							<button id="webdevButt">Web Development</button>
						</li>

					</ul>

				</div>

			</div>



		</nav>

		</section>




		<SECTION>

			<div class="container">

				<div class = "row">

					<div class="col-md-6">

						<div id="aboutContent"> These are facts about me </div>

					</div>

					<div class="col-md-6">

							<div id="webdevContent"> Web development stuff </div>

					</div>

				</div>

			</div>

		</SECTION>


		<SECTION>

			<div class="container">

					<div class="row">

						<div class="col-md-6">

							<div id="busidevContent"> Let me start your business </div>

						</div>

						<div class="col-md-6">

							<div id="contactsContent"> These are my contacts </div>

						</div>

					</div>

			</div>

		</SECTION>



























	</body>






	<script>

		$(document).ready(function() {

			$("#contactsContent").hide();
			$("#busidevContent").hide();
			$("#webdevContent").hide();
			$("#aboutContent").hide();



			$("#aboutButt").click(function(){
				$("#busidevContent").hide();
				$("#contactsContent").hide();
				$("#webdevContent").hide();
				$("#titleContent").hide();
				$("#aboutContent").show(1000);



			});


			$("#webdevButt").click(function(){
				$("#titleContent").hide();
				$("#contactsContent").hide();
				$("#aboutContent").hide();
				$("#busidevContent").hide();
				$("#webdevContent").show(1000);
			});


			$("#busidevButt").click(function(){
				$("#titleContent").hide();
				$("#contactsContent").hide();
				$("#aboutContent").hide();
				$("#webdevContent").hide();
				$("#busidevContent").show(1000);
			});


			$("#contactButt").click(function(){
				$("#titleContent").hide();
				$("#aboutContent").hide();
				$("#webdevContent").hide();
				$("#busidevContent").hide();
				$("#contactsContent").show(1000);
			});

		});


	</script>






</html>