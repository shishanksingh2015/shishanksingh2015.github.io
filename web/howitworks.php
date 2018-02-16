<?php

require("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Odyssey - Surprise Travels</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Travel Adventure a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="css/JiSlider.css" rel="stylesheet"> <!-- banner js-->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Testimonials js-->

<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'> <!-- lightbox css --> <!-- gallery js -->

<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" media="all" href="css/form-labels-on-top.css">

<!-- default css files -->

<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->

</head>

<!-- Body -->
<body>

<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="container">
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><i style="color:white;">ODYSSEY</i></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#services" class="menu__link">How It Works </a></li>
							<li class="menu__item"><a href="howitworks.html"class=" menu__link" >Signup!</a></li>
							<li class="menu__item"><a href="#team" class="menu__link">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link">Gallery</a></li>
							<li class="menu__item"><a href="#testimonials" class="menu__link">Testimonials</a></li>
							<li class="menu__item"><a href="https://goo.gl/Lts762" class=" menu__link">Blog</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">

					<div class="w3layouts-banner-top">
						<div class="container">
								<div class="agileits-banner-info">
									<h3 style="font-family: 'Dancing Script', cursive;">Signup</h3>
									<p style="font-family: 'Dancing Script', cursive; color:white;font-size:2.0em;text-align:center;">
										Sign up for your surprise 3-day weekend getaway
										Complete the survey and we will send you somewhere you will love.</p>
								</div>
					</div>
					</div>
	</div>
</div>

<div class="main-content">

		<!-- You only need this form and the form-labels-on-top.css -->

		<form class="form-labels-on-top" enctype="multipart/form-data" method="post" action="submit.php">

				<div class="form-title-row">
						<h1>Traveller Form</h1>
				</div>

				<div class="form-row">
						<label>
								<span>Full name*</span>
								<input type="text" name="first_name"><br/>
						</label>
				</div>

				<div class="form-row">
						<label>
								<span>Email*</span>
								<input type="email" name="email">
						</label>
				</div>

				<div class="form-row">
						<label>
								<span>Contact</span>
								<span style="font: 12px sans-serif;">Promise we will not spam you</span>
								<input type="phone_number" name="phone_number"><br/>
						</label>
				</div>

				<div class="form-row">
						<label>
								<span>Age Group*</span>
								<select name="age_group">
								<option value="15-20">15-20</option>
								<option value="20-30">20-30</option>
								<option value="30-40">30-40</option>
								<option value="40-50">40-50</option>
								<option value="Above 50">Above 50</option>
								</select><br/>
						</label>
				</div>

<div class="form-row">
				<label><span>I will travel* </span></label>
				<div class="form-radio-buttons">

						<div>
								<label>
										<input type="radio" name="radio" value="Solo">
										<span>Solo</span>
								</label>
						</div>

						<div>
								<label>
										<input type="radio" name="radio" value="As a couple">
										<span>As a couple</span>
								</label>
						</div>

						<div>
								<label>
										<input type="radio" name="radio" value="With family">
										<span>With family</span>
								</label>
						</div>

						<div>
								<label>
										<input type="radio" name="radio" value="With friends">
										<span>With friends</span>
								</label>
						</div>
				</div>
				</div>
				<div class="form-row">

				<label for"number_of_travellers">
					<span>If you plan to travel with family or friends, then mention the number of people travelling with you </span></label>
				<input type="text" name="number_of_travellers"><br/>
</div>

				<div class="form-row">
					<label for"preferred_dates"><span>Your preferred travel dates* </span>
						<span style="font: 12px sans-serif;">Odyssey trips are for 2 nights / 3 days. Please allow us at least  2 weeks to plan your surprise trip.</span>
					<input type="date" name="preferred_dates"><br/>
						</label>
				</div>

				<div class="form-row">
					<label for"leaving_time"><span>Leaving not before: </span>
					<input type="time" name="leaving_time"><br/>
						</label>
				</div>

				<div class="form-row">
					<label for"arriving_time"><span>Arriving not after: </span>
					<input type="time" name="arriving_time"><br/>
					</label>
				</div>

				<div class="form-row">
					<label for"boarding"><span>Where would you like to start your journey from ?* </span>
					<input type="text" name="boarding"><br/>
					</label>
				</div>

				<div class="form-row">
					<label for"last_destinations"><span>Tell us the names of your last 5 travel destinations.* </span>
						<textarea rows="4" disabled="" name="last_destinations" style="width:100%;border:solid 1px rgba(0, 0, 0, 0.1);"></textarea>
					</label>
				</div>

				<div class="form-row">
					<label for"not_to_travel"><span>Do you have any upcoming trips planned ? </span>
					<textarea rows="4" disabled="" name="planned_trip" style="width:100%;border:solid 1px rgba(0, 0, 0, 0.1);"></textarea>
				</label>
				</div>

				<div class="form-row">
					<label for"planned_trip"><span>Tell us some places where you would not like to travel..*</span>
					<textarea rows="4" disabled=""  name="not_to_travel" style="width:100%;border:solid 1px rgba(0, 0, 0, 0.1);"></textarea>
				</label>
				</div>


				<div class="form-row">
					<label for"preference"><span>When you travel, you prefer ?* </span> </label><br>
						<input type="checkbox" name="preference" value="Beach"  style="margin-bottom:8px;">  Beach<br>
						<input type="checkbox" name="preference" value="Countryside" style="margin-bottom:8px;">  Countryside<br>
						<input type="checkbox" name="preference" value="Desert" style="margin-bottom:8px;">  Desert<br>
						<input type="checkbox" name="preference" value="Forest" style="margin-bottom:8px;">  Forest<br>
						<input type="checkbox" name="preference" value="Lake" style="margin-bottom:8px;">  Lake<br>
						<input type="checkbox" name="preference" value="Mountains" style="margin-bottom:8px;"> Mountains<br>
						<input type="checkbox" name="preference" value="Snow" style="margin-bottom:8px;">  Snow<br>
						<input type="checkbox" name="preference" value="Urban" style="margin-bottom:8px;">  Urban<br>
						</label>
				</div>

				<div class="form-row">
								<label><span>Tell us your preferred destination type*</span></label>
								<div class="form-radio-buttons">

										<div>
												<label>
														<input type="radio" name="radio" value="Isolated">
														<span>Isolated</span>
												</label>
										</div>

										<div>
												<label>
														<input type="radio" name="radio" value="Small City">
														<span>Small City</span>
												</label>
										</div>

										<div>
												<label>
														<input type="radio" name="radio" value="Town">
														<span>Town</span>
												</label>
										</div>

										<div>
												<label>
														<input type="radio" name="radio" value="Urban Metropolis">
														<span>Urban Metropolis</span>
												</label>
										</div>
								</div>
								</div>

								<div class="form-row">
									<label for"hobbies"><span>What are some of your hobbies/interests?*  </span></label><br>
										<input type="checkbox" name="preference" value="Historical sights"  style="margin-bottom:8px;">  Historical sights<br>
										<input type="checkbox" name="preference" value="Shopping"  style="margin-bottom:8px;">  Shopping<br>
										<input type="checkbox" name="preference" value="Art Museums/Galleries"  style="margin-bottom:8px;">  Art Museums/Galleries<br>
										<input type="checkbox" name="preference" value="Trekking"  style="margin-bottom:8px;">  Trekking<br>
										<input type="checkbox" name="preference" value="Dancing/Clubs">  Dancing/Clubs<br>

<div class="form-row">
	<label for"notes"><span>Anything else we should know?</span>
	<span style="font: 12px sans-serif;">Examples: I don't drink alcohol. I love live music. I like handicraft shops. </span>
	<textarea rows="4" disabled="" name="notes" style="width:100%;border:solid 1px rgba(0, 0, 0, 0.1);"></textarea>
	</label>
</div>
				<div class="form-row">
						<button type="submit">Submit Form</button>
				</div>

		</form>

</div>


<!-- copyright -->
<div class="footer-w3layouts">
	<div class="container">
		<div class="agile-copy">
			<p>Copyright © 2018 MoldedBits Pvt. Ltd.</p>
		</div>

		<div class="w3_agileits_social">
			<div class="social-icon">
				<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- copyright -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<h5>Travel Adventure</h5>
						<img src="images/blog1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<!-- gallery plugin -->
	<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
	<script>
		$(function(){
			var gallery = $('.w3gallery-grids a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
		});
	</script>
<!-- //gallery plugin -->

<!-- ji slider --><!-- banner js script -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- //ji slider --><!-- //banner js script -->

<!-- for-Testimonials -->
	<script defer src="js/jquery.flexslider.js"></script>
	<!--Start-slider-script-->
			<script type="text/javascript">

			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		  </script>
	<!--End-slider-script-->
<!-- //for-Testimonials -->

<script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->

<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->

<script src="js/jquery.vide.min.js"></script><!-- video js file -->

</body>
<!-- //Body -->
</html>
