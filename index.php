
<?php
if(isset($_POST['submit'])) {
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

		$nameSani = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$emailSani = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$messageSani = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

		$message ='
<html>
<head>
  <title>Petercam Contact</title>
</head>
<body>
  <p></p>
  <table>
    <tr>
      <th>.From : </th><th>'.$nameSani.'</th>
    </tr>
    <tr>
    	<th>Message : </th> <th>' .$messageSani .'</th>
	</tr>
  </table>
</body>
</html>
';
		mail('foundation@degroofpetercam.com', 'Contact venant du site', $message);
	} else {
		$msgErreur = "<p>* Veuillez remplir tous les champs</p>";
	}
}
?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html"><img src="images/degroof.png" class="logoDegroof"></a></h1>
								<p class="subLogo"><strong class="white">Since 2008</strong>, we support and guide long-term & innovative projects with large-scale implementation potential.
We also seek to promote engagement within Bank Degroof Petercam. </p>
							</div>

<?php include 'header.php'; ?>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">

					<div class="title" id="Mission">MISSION</div>
					<section id="intro" class="container">
						<p class="style1">We believe in <strong>sustainable growth</strong> in an European economy where no one should be left behind. We act towards this by investing in the best solutions for <strong>job creation</strong> and access to work, from <strong>cradle to career.</strong></p>
						<p class="style1">The 3 pillars of Degroof Petercam Foundation: </p>
						<!--<p class="style2">-->
							
						<ul class="actions">
							<li>
								<a href="#" class="button style3 big">Jobs for sustainable Growth</a>

								<ul class="actions">
									<li><a href="#" class="button style3 big">Education (youth)</a></li>
									<li><a href="#" class="button style3 big">Entrepreneurship</a></li>
									<li><a href="#" class="button style3 big">Job accessibility</a></li>
								</ul>
							</li>
						</ul>
						<!--</p>-->
					


					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div id='Challenge' class="title">CHALLENGE</div>
					<div id="main" class="container challenge">
							<p class="style1">Every year, the Foundation offers a 1M€ grant and a 5 year core support to boost and scale the project with the best solution for employment.</p>
							<p class="style1">The thematic is rotating every 3 years:</p>
							<ul class="style1">
								<li class="style1"> Inspiration and entrepreneurial skills for the youth</li>
								<li class="style1"> Support to entrepreneurship</li>
								<li class="style1"> Job accessibility for underprivileged profiles</li>
							</ul>
							<p class="style1">Do you want to apply ? Check the <a href=""><strong>eligibility</strong></a> and <a href=""><strong>evaluation</strong></a> criteria before applying. </p>
							<ul class="style1">
							</section>
						</div>
					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">

					<div class="title" id="Contact">CONTACT</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>The team</h2>
							<div class="row 100%">
								<div class="3u 12u(mobile)">
									<section class="highlight">
										<a href="#" class="image featured img_contact "><img  src="images/silvia.jpg" alt="" height='215px' /></a>
										<h3><a href="#">Silvia Steisel</a></h3>
										

									</section>
								</div>
									<div class="3u 12u(mobile)">
									<section class="highlight">
										<a href="#" class="image featured img_contact"><img  src="images/patti.jpg" alt="" height='215px' /></a>
										<h3><a href="#">Patti Walraf</a></h3>
										
										
									</section>
								</div>
								<div class="3u 12u(mobile)">
									<section class="highlight">
										<a href="#" class="image featured img_contact"><img  src="images/Alizée.png" alt="" height='215px'/></a>
										<h3><a href="#">Alizée du Bus</a></h3>
										
										
									</section>
								</div>
								<div class="3u 12u(mobile)">
									<section class="highlight">
										<a href="#" class="image featured img_contact"><img  src="images/minke.jpg" alt="" height='215px'/></a>
										<h3><a href="#">Minke de Smet</a></h3>
										
										
									</section>
								</div>
							</div>

						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">

													<ul class="actions">


														<li><input type="submit" name="submit" class="style1" value="Send" /></li>
													</ul>
												<?php if(isset($msgErreur)) { echo $msgErreur; }; ?>

												</div>
											</div>
										</form>
									</section>


							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">

											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>

														<a href="#">facebook.com</a><br />
														<a href="#">linkedin.com</a><br />



													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>

														<a href="#">foundation@degroofpetercam.com </a>
													</p>
												</section>
											</div>


									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>


