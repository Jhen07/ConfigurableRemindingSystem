<?php
	require_once('Conn.php');

	if ($user->isLoggedIn()) {
		$user_id = $_SESSION['user_session'];
		$user_data = $user->getUserData($user_id);
	}
	else {
		header('Location: login.php');
		exit;
	}

	if (isset($_POST['submit'])) {		
		if ($_POST['password'] === $_POST['confirm_password']) {
			if($user->newstaff($_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['dateofbirth'], $_POST['dateofbaptism'], $_POST['locale'], $_POST['churchid'], $_POST['address'], $_POST['contact'], $_POST['emailaddress'], $_POST['username'], $_POST['password'])) {
				header('Location: admin.php');
				exit;
			}
		}
		else {			
		$_SESSION['message'] = "TRY AGAIN!";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>New Account</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Life web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-css -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-css -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Popup css (for Video Popup) -->
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all">
	<!-- Lightbox css (for Projects) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- Flexslider css (for Testimonials) -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rasa:300,400,500,600,700" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div id="error">
		<?php 
			if (isset($_SESSION['message'])){
			 	echo $_SESSION['message'];
				unset($_SESSION['message']);
		 	}
		?>
	</div>
	<div class="main-agile">
		<!-- banner -->
		<div class="agile-top">
			<!-- navigation -->
			<div class="col-xs-2 menu">
				<a href="" id="menuToggle">
					<span class="navClosed"></span>
				</a>
				<nav>
					<a href="admin.php">Home</a>
					<a href="registration.php">New Elder</a>
					<a href="ams.php">Medicine Monitoring</a>
					<a href="logout.php">Sign Out</a>
				</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->
	<br>
	<h3 class="tittle">
		<span style="color: #0d0550">R</span>egister <span style="color: #0d0550">N</span>ew <span style="color: #0d0550">S</span>taff
	</h3><br>
	<div class="tittle-style"></div>
	<!-- my profile -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/download.png">
					</div>
				</div>
			<div class="welcome-sub-wthree">
		<div class="col-md-5 banner_bottom_left">

	<!-- //update Model -->
		<div id="error">
			<?php 
				if (isset($_SESSION['message'])){
				 	echo $_SESSION['message'];
					unset($_SESSION['message']);
			 	}
			?>
		</div>
		<table width="700px" ><tr><td>
				<!-- Modal content-->
		<div class="modal-content" id="about" >
			<div class="modal-body modal-body-sub_agile" >
				<div class="main-mailposi" >
					<span class="fa fa-envelope-o" aria-hidden="true" ></span>
				</div>
				<div class="modal_body_left modal_body_left1">
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">
						<span>Name:</span>
						<table>
							<tr>
								<td width="250px">
									<input id="firstname" type="text" placeholder= " FirstName" name="firstname"  required>
								</td>
								<td>
									<input id="middlename" type="text" placeholder= " Middlename" name="middlename"  required>
								</td>
								<td width="250px">
									<input id="lastname" type="text" placeholder= " Lastname" name="lastname"  required>
								</td>
							</tr>
						</table>		
					</div>
					<div class="styled-input">
						<span>Date of Birth:</span>
						<input id="dateofbirth" type="text" placeholder= "Month Day, Year" name="dateofbirth"  required>
					</div>
					<div class="styled-input">
						<span>Date of Baptism:</span>
						<input id="dateofbaptism" type="text" placeholder= "Month Day, Year" name="dateofbaptism"  required>
					</div>
					<div class="styled-input">
						<span>Locale:</span>
						<input id="locale" type="text" placeholder= "Locale, Division" name="locale"  required>
					</div>
					<div class="styled-input">
						<input id="churchid" type="text" placeholder= "Church ID" name="churchid"  required>
					</div>
					<div class="styled-input">
						<input id="address" type="text" placeholder= "Address" name="address"  require>
					</div>
					<div class="styled-input">
						<input id="contact" type="text" placeholder= "Contact Number" name="contact">
					</div>
					<div class="styled-input">
						<input id="emailaddress" type="text" placeholder= "E-mail Address" name="emailaddress">
					</div>
					<div class="styled-input">
						<input id="username" type="text"  placeholder="Username"  name="username" required/>
					</div>
					<div class="styled-input">
						<input id="password " type="password" placeholder="Password"  name="password" placeholder="  Password" required/>
					</div>
					<div class="styled-input">
						<input id="confirm_password " type="password" placeholder="Confirm Password" name="confirm_password"  required>
					</div>

						<input style="background: #0d0550" type="submit" name="submit" value="Register">
						<hr>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //Modal content-->
		</td></tr></table>

					<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //my profile -->


	<!-- EMPTY -->
	<div class="agileits-services" id="services">
		<div class="container">
			<div class="title-div">
				<div>
				</div>
			</div>
			<div class="agileits-services-row">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
					<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
		<div class="container">
			<div class="title-div">
				<div>
				</div>
			</div>
			<div class="agileits-services-row">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
					<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
					</div>
					<div class="col-xs-9 wthree-heading">
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!-- //EMPTY -->

	<!-- footer -->
	<div class="footer-bot">
		<div class="container">
			<div class="clearfix"></div>
			<div class="copy-right">
				<p> &copy; 2019 ADD Orphanage System.
					<br>Salumbides, R., Maaba, J., Macababbad, A.M., Usi, J. (BSIS3).
					<br>All Rights Reserved | Design by
					<a href="http://w3layouts.com/"> W3layouts</a>
				</p>
			</div>
		</div>
	</div>
	<!-- //footer -->


	<!-- js-scripts -->

	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!--  light box js -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //light box js-->
	
	<!-- stats numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->
	
	<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //Baneer-js -->

	<!-- navigation -->
	<script>
		(function ($) {
			// Menu Functions
			$(document).ready(function () {
				$('#menuToggle').click(function (e) {
					var $parent = $(this).parent('.menu');
					$parent.toggleClass("open");
					var navState = $parent.hasClass('open') ? "hide" : "show";
					$(this).attr("title", navState + " navigation");
					// Set the timeout to the animation length in the CSS.
					setTimeout(function () {
						console.log("timeout set");
						$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
					}, 200);
					e.preventDefault();
				});
			});
		})(jQuery);
	</script>
	<!-- //navigation -->

	<!-- pop-up(for video popup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box (syllabus section video)-->
	
	<!-- video js (background) -->
	<script src="js/jquery.vide.min.js"></script>
	<!-- //video js (background) -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling-bottom-to-top -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- //js-scripts -->
	</div>
</body>
</html>