<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once('conn.php');

	if (isset($_SESSION['user_session'])){
	header('Location: admin.php');
	exit;
	}
	if (isset($_POST['submit'])){
		if (isset($_POST['username']) && ($_POST['password'])) {
			if ($user->login($_POST['username'], $_POST['password'])) {
				header('Location:staff.php');
				exit;
			}
		}
	}

	if (isset($_SESSION['user_session'])){
	header('Location: index.php');
	exit;
	}
	if (isset($_POST['submit1'])){
		if (isset($_POST['useradmin']) && ($_POST['passadmin'])) {
			if ($user->admin($_POST['useradmin'], $_POST['passadmin'])) {
				header('Location:admin.php');
				exit;
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ADD Orphanage System</title>
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
	<div id="message">
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
			<div class="col-xs-4 logo">
			<!-- logo -->
				<div>
					<img src="images/download.png" width="120px" height="120px">
				</div>
			<!-- //logo -->
			</div>
			<div class="col-xs-6 header-w3l">
				<ul>
					<li style="background: #092b638c" >
						<a href="#" data-toggle="modal" data-target="#myModal3">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Admin </a>
					</li>
					<li style="background: #092b638c">
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
				</ul>
			</div>
			<!-- navigation -->
			<div class="col-xs-2 menu">
				<a href="" id="menuToggle">
					<span class="navClosed"></span>
				</a>
				<nav>
					<a href="index.php">Home</a>
					<a href="#about" class="scroll">About Us</a>
					<a href="#services" class="scroll">Activities</a>
				</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign" style="color: #0d0550">Sign In </h3>
						<p>
							Sign In now, Make sure you're a registered STAFF.
						</p>
				

						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input id="username" type="text" name="username" placeholder="Username" required="">
							</div>
							<div class="styled-input">
								<input id="password " type="password" name="password" placeholder="Password" required="">
							</div>
							<input style="background: #0d0550" type="submit" name="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal -->
	<!-- //signin Model -->
	<!-- signin Model -->
	<!-- Modal3 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign" style="color: #0d0550">Sign In </h3>
						<p>
							Sign In now, Make sure you account is for ADMIN.
						</p>
				

						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input id="useradmin" type="text" name="useradmin" placeholder="Username" required="">
							</div>
							<div class="styled-input">
								<input id="passadmin" type="password" name="passadmin" placeholder="Password" required="">
							</div>
							<input style="background: #0d0550" type="submit" name="submit1" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal3 -->
	<!-- //signin Model -->

	<!-- banner-text -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div>
						<img src="images/onena.jpg" width="1118px" />
						<div class="container">
							<div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div>
						<img src="images/nge.jpg" width="1118px" />
						<div class="container">
							<div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div>
						<img src="images/rarp.jpg" width="1118px"/>
						<div class="container">
							<div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->

	<!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span style="color: #0d0550">W</span>elcome
				</h3><br>
				<div class="tittle-style">
				</div>
				<p>The site was for the use of ADD Orphanage for the Medication Reminder ofthe elders and for keeping and managing the record of the elders and also the staff. The completion of the project will be used by the ADD Orphanage, Apalit.  </p>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div id="team">
		<img src="images/now.jpg" width="1120px"/>
	<!-- //about -->
	<table width="1000px"><tr><td colspan="3" >
	<!-- activities -->
	<div class="agileits-services" id="services">
		<h3 class="tittle">
			<span style="color: #0d0550">A</span>ctivities
		</h3>
		<div class="tittle-style">
		</div>	
	</div>
	</td></tr>
	<tr><td class="col-xs-9 wthree-heading"><center>
			<h4 class="tittle"><span>Thanksgiving</span> </h4>
		</td>
		<td class="col-xs-9 wthree-heading"><center>
			<h4>Worship Service</h4>
		</td>
		<td class="col-xs-9 wthree-heading"><center>
			<h4>Prayer Meeting</h4>
		</td>
	</tr>
	<tr><td class="col-xs-9 wthree-heading">
			<img src="images/tg.jpg" width="300px">
		</td>
		<td class="col-xs-9 wthree-heading">
			<img src="images/ws.jpg" width="300px">
		</td>
		<td class="col-xs-9 wthree-heading">
			<img src="images/pm.jpg" width="300px">
		</td>
	</tr>
	</div>
	</div>
	<!-- //services -->
	</td></tr></table>

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

</body>

</html>