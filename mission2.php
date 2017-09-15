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
		<title>Degroof Petercam Fundation</title>
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
							<?php include "header.php"; ?>
							<?php include 'nav.php'; ?>

						<!-- Nav -->
							
					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">

					<div class="title" id="education">EDUCATION</div>
					<section id="intro" class="container">
						<p>
    The Degroof Petercam Foundation supports education by helping to reduce the number of school dropouts. The main focus is on children from low-come families and who are socially disadvantaged. That’s why we’re contributing to quality, equitabl  e education by supporting students with:
    <ul>
          <li>coaching and guidance</li>
             <li>encouragement</li>
          <li>information about new skills that they’ll need in the future</li>
          <li>reassessment of technical and vocational education</li>
   </ul>

    And teachers with:
   <ul>
      <li>coaching and guidance</li>
      <li>encouragement</li>
      <li>revaluation of the teaching profession</li>
      <li>informational and educational workshops</li>
   </ul>
   </p>
						<!--<p class="style2">-->
							
					
						<!--</p>-->
					


					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2" id="entreprise">
					<div class="title">Entrepreneurship</div>
					<div id="main" class="container">

						<!-- Image -->
						<!-- 	<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>
 -->
						<!-- Features -->
							<section id="features">
								 <p>
    Entrepreneurship was selected as the second priority pillar because the Foundation is convinced that the creation of enterprises is an effective and measurable solution to the economic challenges facing future generations.
  </p>
  
  <p>
    The Foundation aims to encourage the creation of businesses and job creation by:
     <ul>
         <li>highlighting entrepreneurship and the role of the entrepreneur</li>
         <li>promoting entrepreneurship among young people</li>
         <li>supporting new initiatives to boost entrepreneurship</li>
     </ul>
  </p>  
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">Job accessibility</div>
					<div id="highlights" class="container">
						 <ul>
               <li>Give access to jobs for more underpriviledged</li>
               <li>Being a catalyst, activator</li>
               <li>Match job supply and demand</li>
               <li>….</li>      
       </ul>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">

					<div class="title">Contact</div>
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