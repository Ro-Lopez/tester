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


		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>


		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>








		<title>Testing Page</title>


	</head>


	<body>


		<div><img src="images/busywork.jpg" id="bg" alt=""></div>


		<section>
			<nav class="navbar navbar-default navbar-fixed-top">
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


		<section id="onload">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>The Development You Need</h2>
					</div>
				</div><br><br>

				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<h2>For The Life You Want</h2>
					</div>
				</div>
			</div>
		</section>


		<SECTION>
			<div class="container-fluid">
				<div class = "row">
					<div class="col-md-12">
						<div id="aboutContent"> <h3>About Me:</h3>
							<p>Hello, my name is Robbie!</p><p> I am a Business Consultant, specializing in Web Development. I am offering my services and experiences to put my clients in a position of success.</p> <p>I 								graduated with degrees in Business and Entrepreneurship  in 2016, and also a degree in Full Stack Web Development in 2017. </p> <p>When I am not developing, creating, or learning; you
									can find 								me enjoying the outdoors with my two rottweilers, engaging in a martial arts or fitness activity, playing my favorite video game World of Warcraft, or just 										catching up on the latest episode of 								Game of Thrones. <p>I can't wait to work with you! </p>
						</div>

						<div

						<div id="webdevContent"> <h3>Web Development:</h3>
							<p>Implement front and back end web development for an online presence</p>
							<p>Backend: mySQL | PHP storm | Composer Package Manager | Object Oriented | Unit Testing | Data Design</p>
							<p>Frontend: Angular 4 | Javascript | UI/UX | CSS3 | HTML5 | npm package manager | JSON APIs | Dev Tools | Bootstrap | Restful | Wordpress</p>
							<p>Security: jQuery | CSRF/XSRF | XSS | Hashing | Salting | Cookie Security | Session Security</p>
							<p>Other: Github | Git | Asana  | Windows OS | Mac OS </p>
						</div>



						<div id="busidevContent"> <h3>Business Development:</h3>
								<p>Collected millions of dollars in insurance money.</p>
								<p>Revamped the business flow and systems to make multiple companies cash positive.</p>
								<p>Hired on during start-up's to fully structure a business from the ground up.</p>
								<p>Collaborated with numerous founders and doctors within multiple diverse corporate structures. </p>
								<p>Advanced managerial, employment, and communication techniques.</p>
								<P>Background in Quickbooks, marketing, sales, accounting, and IT.</P>
								<p>Easy adaptable to new environments and markets. </p>
								<p>Renovated over a hundred residential and corporate properties within New Mexico.</p>
						</div><br><br>

						<div id="busidevContentb"> <h3>Past Experiences:</h3>
							<p>words. words. words.</p>



						</div>

						<div id="contactsContent"> <h3>Contact Me:</h3>

							<!-- BEGIN CONTACT FORM -->
							<form id="contact-form" method="POST" action="php/mailer.php">
								<div class="form-group">
									<label for="name">Name</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
										<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment"></i>
										</div>
										<textarea rows="5" name="message" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
									</div>
								</div>

								<!-- Google reCAPTCHA-->
								<div class="g-recaptcha" data-sitekey="6LdF0iMUAAAAAL4NAq0zjr26SUZcktpRP4xhyuPd"></div>

								<button class="btn btn-default" type="reset">Reset</button>
								<button class="btn btn-info" type="submit">Submit</button>
							</form>
							<!-- END CONTACT FORM-->

						</div><!-- /.col-sm-6 -->
					</div><!-- /.row -->

					<!-- EMPTY FORM OUTPUT AREA -->
					<div class="row">
						<div class="col-md-6">
							<div id="output-area"></div>
						</div>
					</div>


				</div>
		</SECTION>


	</body>


	<script>

		$(document).ready(function() {
			$("#contactsContent").hide();
			$("#busidevContent").hide();
			$("#busidevContentb").hide();
			$("#webdevContent").hide();
			$("#aboutContent").hide();


			$("#aboutButt").click(function(){
				$("#busidevContent").hide(500);
				$("#contactsContent").hide(500);
				$("#webdevContent").hide(500);
				$("#titleContent").hide(500);
				$("#onload").hide(2000);
				$("#aboutContent").show(1000);
			});


			$("#webdevButt").click(function(){
				$("#titleContent").hide(500);
				$("#contactsContent").hide(500);
				$("#aboutContent").hide(500);
				$("#busidevContent").hide(500);
				$("#onload").hide(2000);
				$("#webdevContent").show(1000);
			});


			$("#busidevButt").click(function(){
				$("#titleContent").hide(500);
				$("#contactsContent").hide(500);
				$("#aboutContent").hide(500);
				$("#webdevContent").hide(500);
				$("#onload").hide(2000);
				$("#busidevContent").show(1000);
				$("#busidevContentb").show(1000);
			});


			$("#contactButt").click(function(){
				$("#titleContent").hide(500);
				$("#aboutContent").hide(500);
				$("#webdevContent").hide(500);
				$("#busidevContent").hide(500);
				$("#onload").hide(2000);
				$("#contactsContent").show(1000);
			});
		});


	</script>


</html>