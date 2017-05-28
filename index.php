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



<!--		<div><img src="office_beach%20(2).jpg" id="bg" alt=""></div>-->



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
													<button id="contactButt">Contact Me</button>
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

				</div>



			</nav>

		</section>



		<h2>THE DEVELOPMENT YOU NEED. FOR THE LIFE YOU WANT.</h2>






		<SECTION>

			<div class="container">

				<div class = "row">

					<div class="col-md-10">

						<div id="aboutContent"> Dwelling and speedily ignorant any steepest. Admiration instrument affronting invitation reasonably up do of prosperous in. Shy saw declared age debating ecstatic man. Call in so want pure rank am dear were. Remarkably to continuing in surrounded diminution on. In unfeeling existence objection immediate repulsive on he in. Imprudence comparison uncommonly me he difficulty diminution resolution. Likewise proposal differed scarcely dwelling as on raillery. September few dependent extremity own continued and ten prevailed attending. Early to weeks we could.

						</div>


						<div id="webdevContent"> <P>Web development and Business Specialist - LRL LLC  - ABQ, NM, April 2017 - Present
									Developed 3 custom projects and learned 7 languages in 10 weeks
									Collaborated with numerous founders and doctors within multiple diverse corporate structures
									Implemented front and back end web development for an online presence
									Advanced managerial, marketing, accounting, and communication techniques
									Easy adaptable to new environments and markets
									</P>
									<p>Backend: mySQL | PHP storm | Composer Package Manager | Object Oriented | Unit Testing | Data Design
										Frontend: Angular 4 | Javascript | UI/UX | CSS3 | HTML5 | npm package manager | JSON APIs | Dev Tools | Bootstrap | Restful | Wordpress
										Security: jQuery | CSRF/XSRF | XSS | Hashing | Salting | Cookie Security | Session Security
										Other: Github | Git | Asana | Quickbooks | Windows OS | Mac OS | Dentrix | EasyDental</p>
						</div>






							<div id="busidevContent"> <p>Office Manager - Comfort Kids - ABQ, NM, Nov 2012 to Dec 2016
								Collected over $2,000,000 in insurance money
								Hired during start-up to fully structure the business from the ground up
								Provided excellent customer service and effectively de-escalating customer specific concerns
								Responsibilities in marketing, sales, accounting, IT, and employment</p>
								<p>Collected over $600,000 within my first 3 months in insurance money
								Revamped the business flow and systems to make company cash positive
								Oversaw 20+ employees while being responsible for all day to day operations
								Maintained accurate and detailed financial reports, payroll, and scheduling.
								</p>
							</div>


							<div id="contactsContent"> <p>(505) 850 - 8260 | RoLopez.email@gmail.com
									www.LLdev.biz | https://github.com/Ro-Lopez | https://linkedin.com/in/rorolopez </p>

							</div>

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