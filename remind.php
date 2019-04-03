<?php 
	require_once('conn.php');

	if ($user->isLoggedIn()) {
		$user_id = $_SESSION['user_session'];
		$user_data = $user->getUserData($user_id);
	}
	else {
		header('Location: index.php');
		exit;
	}

	if (isset($_POST['submit'])) {		
		if ($_POST['password'] === $_POST['confirm_password']) {
			if($user->attend($_POST['name'],$_POST['churchid'],$_POST['dateattend'], $_POST['typeofservice'], $_POST['batch'], $_POST['localattended'], $_POST['proof'])) {
				header('Location: staff.php');
				exit;
			}
		} else {			
			$_SESSION['message'] = "TRY AGAIN!";
		}
	}
?>


<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!<?php  
	require_once('conn.php');	

	if (!$user->isLoggedIn()) {
		header('Location: login.php');
	}

	$userData = $user->getUserData($_SESSION['user_session']);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Attendance Form</title>
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
	<div>
	<?php 
		if (isset($_SESSION['message'])) {
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
					<a href="staff.php">Home</a>
					<a href="logout.php">Sign Out</a>
				</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->
	<br>
	<div><center>
		<img src="images/mcgilogo.png">
	</div>

	<!-- my profile -->
	<div class="banner-bottom-w3l" id="about">
		<table width="1118px"><tr><td>
			<h3 style="text-align: center; font-size: 30px" class="tittle">
				<span style="color: #0d0550">N</span>ew <span style="color: #0d0550">I</span>nformation
		</h3><br><br>
		</td></tr></table>

	<!-- //update Model -->
		
		<table align="center" width="700px" ><tr><td>
		<!-- Modal content-->
		<div class="modal-content" >
			<div class="modal-body modal-body-sub_agile" >
				<div class="main-mailposi" >
					<span class="fa fa-envelope-o" aria-hidden="true" ></span>
				</div>
				<div class="modal_body_left modal_body_left1">
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">	
						<span>Name:</span>
						<input id="name" type="text" name="name" required>
					</div>
					<div class="styled-input agile-styled-input-top">	
						<span>Church ID:</span>
						<input id="churchid" type="text" name="churchid" required>
					</div>
					<div class="styled-input">
						<span>Type of Service:</span>
						<input id="typeofservice" type="text" name="typeofservice" required>
					</div>
					<div class="styled-input">
						<span>Date:</span>
						<input id="dateattend" type="text" name="dateattend" required>
					</div>
					<div class="styled-input">
						<span>Locale:</span>
						<input id="localattended" type="text" name="localattended" required>
					</div>
					<div class="styled-input">
						<span>Batch:</span>
						<input id="batch" type="text" name="batch" required>
					</div>
					<div class="styled-input">
						<span>Proof:</span>
						<input id="proof" type="text" name="proof" required>
					</div>
					<input style="background: #0d0550" type="submit" name="submit" value="Submit">
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