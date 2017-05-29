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



		<div><img src="images/busywork.jpg" id="bg" alt=""></div>



		<section>

			<nav class="navbar navbar-default">

				<div class="container-fluid">

					<div class="row">

						<div class="col-12">



							<div class="navbar-header">
								<h1>LLdev</h1>
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								</div>







								<div class="collapse navbar-collapse" id="main-menu">



									<ul class="nav navbar-nav navbar-right" id="navbar">






												<li>
													<button id="aboutButt">About Me</button>
												</li>

												<li>
													<button id="busidevButt">Business Development</button>
												</li>

												<li>
													<button id="webdevButt">Web Development</button>
												</li>

												<li>
													<button id="contactButt">Contact Me</button>
												</li>




									</ul>



								</div>

							</div>

						</div>

				</div>



			</nav>

		</section>




		<SECTION>

			<div class="container">

				<div class = "row">

					<div class="col-md-12">

						<div id="aboutContent"> Hello, my name is Robbie! I am a Business Consultant, specializing in Web Development. I am offering my services and experiences to put my clients in a position of success. I graduated with a couple degrees in Entrepreneurship and Business in 2016, and also a degree in Full Stack Web Development in 2017. When I am not developing, creating, and learning; you can find me enjoying the outdoors with my two rottweilers, engaging in a martial arts or fitness activity, playing my favorite video game World of Warcraft, or just catching up on the latest episode of Game of Thrones. I can't wait to work woth you!

						</div>

						<div id="webdevContent"> <h3>About me:</h3>

							<p>Implemented front and back end web development for an online presence</p>

							<p>Backend: mySQL | PHP storm | Composer Package Manager | Object Oriented | Unit Testing | Data Design</p>
							<p>Frontend: Angular 4 | Javascript | UI/UX | CSS3 | HTML5 | npm package manager | JSON APIs | Dev Tools | Bootstrap | Restful | Wordpress</p>
							<p>	Security: jQuery | CSRF/XSRF | XSS | Hashing | Salting | Cookie Security | Session Security</p>
									<p>	Other: Github | Git | Asana | Quickbooks | Windows OS | Mac OS </p>
						</div>






							<div id="busidevContent"> <h3>Business Development</h3>
							</div>


							<div id="contactsContent"> <p>(505) 850 - 8260 | RoLopez.email@gmail.com
									www.LLdev.biz | https://github.com/Ro-Lopez | https://linkedin.com/in/rorolopez </p>
							</div>
						</div>
					</div>
				</div>




		</SECTION>



		<section>

			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<h2>THE DEVELOPMENT YOU NEED.</h2>
					</div>

					<div class="col-md-6">
						<h2>FOR THE LIFE YOU WANT.</h2>
					</div>
				</div>
			</div>
		</section>





































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
				$("#aboutContent").show(750);



			});


			$("#webdevButt").click(function(){
				$("#titleContent").hide();
				$("#contactsContent").hide();
				$("#aboutContent").hide();
				$("#busidevContent").hide();
				$("#webdevContent").show(750);
			});


			$("#busidevButt").click(function(){
				$("#titleContent").hide();
				$("#contactsContent").hide();
				$("#aboutContent").hide();
				$("#webdevContent").hide();
				$("#busidevContent").show(750);
			});


			$("#contactButt").click(function(){
				$("#titleContent").hide();
				$("#aboutContent").hide();
				$("#webdevContent").hide();
				$("#busidevContent").hide();
				$("#contactsContent").show(750);
			});

		});


	</script>






</html>