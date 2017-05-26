<!doctype html>

<html lang="en">

	<head>

		<meta charset="utf-8">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


		<link rel="stylesheet" href="css/style.css" type="text/css">



		<title>Testing Page</title>

	</head>




	<body>


		<section>

		<div class="container-fluid">

			<div class="row">

				<div class="col-4"></div>
					<div>
					<p>LLdev</p>
					</div>


				<div class="col-8S">

					<ul>

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

		</div>

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