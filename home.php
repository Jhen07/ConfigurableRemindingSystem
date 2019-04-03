<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'dbms';
	$dbName = 'webapp2projec';

	$conn = new mysqli($host, $user, $password, $dbName);

	if ($conn->connect_error){
		die('Connection failed');
	}

	$studentid = $_GET['studentid'];

	$sql = "SELECT * FROM studentinfo WHERE studentid = $studentid";
	$result = mysqli_query($conn, $sql);
		$result = $conn->query($sql);
		if ($row = $result->fetch_assoc()) {			
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Home</title>
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
	<?php 
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		} 
	?>
	<div class="main-agile">
		<!-- banner -->
		<div class="agile-top">
			<div class="col-xs-4 logo">
			<!-- logo -->
				<div>
					<img src="images/download.png" width="120px" height="120px">
				</div>
			<!-- //logo -->
			<!-- navigation -->
			<div class="col-xs-2 menu">
				<a href="" id="menuToggle">
					<span class="navClosed"></span>
				</a>
				<nav>
					<a href="admin.php">Home</a>
					<a href="registration.php">New Elder</a>
					<a href="newstaff.php">New Staff</a>
					<a href="ams.php">Medicine Monitoring</a>
					<a href="logout.php">Sign Out</a>
				</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>

	<!-- banner-text -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div>
						<img src="images/rarp.jpg" width="1118px" />
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
						<img src="images/nge.jpg" width="1118px"/>
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

	<!-- my profile -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span style="color: #0d0550">P</span>ersonal <span style="color: #0d0550">P</span>rofile
				</h3>
				<div class="tittle-style">
				</div>
				<div class="col-sm-3 col-xs-6 agileits-team-grid">
					<div class="team-info">
						<img src="images/t3.jpg" alt="">
						<div class="team-caption" style="background: #0d0550">
							<h4>
								<?php echo $row["lastname"]; ?>,
								<?php echo $row["firstname"]; ?> 
								<?php echo $row["middlename"]; ?>
							</h4>
							<ul>
								<?php echo '<a href="update.php?studentid=' . $row['studentid'] . '"><i>Update</i> </a>' ?>
								</a>
							</ul>
						</div>
					</div>
				</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-5 banner_bottom_left">
				<hr>
				<table width="500px">

					<tr>
						<th width="150px" height="30px">Church ID: </th>
						<td ><?php echo $row["churchid"]; ?></td>
					</tr>
					<tr>
						<th width="150px" height="30px">Date of Birth: </th>
						<td ><?php echo $row["dateofbirth"]; ?></td>
					</tr>
					<tr>
						<th width="150px" height="30px">Date of Baptism: </th>
						<td ><?php echo $row["dateofbaptism"]; ?></td>
					</tr>
					<tr>
						<th width="150px" height="30px">Locale: </th>
						<td ><?php echo $row["locale"]; ?></td>
					</tr>
					<tr>
						<th width="150px" height="30px">Contact Number: </th>
						<td ><?php echo $row["contact"]; ?></td>
					</tr>
					<tr>
						<th width="150px" height="30px">Address: </th>
						<td ><?php echo $row["address"]; ?></td>
					</tr>
					<?php
						
					}
					else {
						echo "0 results";
					}
					$conn->close();
					?>
				</table>
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
			</div>
		</div>
	</div>
</div></div></div></div>
	<!-- //EMPTY -->
	<!-- //my profile -->

	<table width="1000px"><tr><td colspan="3" >
	<!-- services -->
	<div class="agileits-services" id="services">
		<h3 class="tittle">
			<span style="color: #0d0550">M</span>edical <span style="color: #0d0550">H</span>istory
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