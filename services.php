<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>
<title>aHn Transporters</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
 <?php
       
 include 'includes/header.php';
   
     ?>
<div class="modal fade" id="myModal2">
<div class="modal-dialog">
<div class="modal-content title1">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
</div>
<div class="modal-body">
<form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>

<!-- when we click on Sign-in button-->
<!-- Text input-->
<div class="form-group">
<label class="col-md-3 control-label" for="email"></label>
<div class="col-md-6">
<input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

</div>
</div>


<!-- Password input-->
<div class="form-group">
<label class="col-md-3 control-label" for="password"></label>
<div class="col-md-6">
<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

</div>
</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
<button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->
<div class="modal fade" id="myModal3">
<div class="modal-dialog">
<div class="modal-content title1">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
</div>
<div class="modal-body">
<form class="form-horizontal" name="form" action="signup.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="name"></label>
	<div class="col-md-12">
		<input id="name" name="name" placeholder="Name" class="form-control input-md" type="text">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label title1" for="email"></label>
	<div class="col-md-12">
		<input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="password"></label>
	<div class="col-md-12">
		<input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

	</div>
</div>

<div class="form-group">
	<label class="col-md-12control-label" for="cpassword"></label>
	<div class="col-md-12">
		<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">

	</div>
</div>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="address" name="address" placeholder="Address" class="form-control input-md" type="text">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">

	</div>
</div>

<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
	<label class="col-md-12 control-label" for=""></label>
	<div class="col-md-12">
	<button type="submit" class="btn btn-primary">Sign up</button>
	</div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div>
</div>
</div><!--container end-->
<div class="banner1">
</div>
<div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>></i></li>
				<li>Our Services</li>
			</ul>
		</div>
	</div>
<!-- services section -->
<div class="services" id="services">
		<div class="heading">
			<h2>Our Services</h2>
		</div>
	<div class="container">
		<div class="servicegrids">
			<div class="servicetopgrids">
				<div class="col-md-4 servicegrid1">
					<h5>01</h5><br><br>
					<h4>Airways Transport</h4>
				</div>
				<div class="col-md-4 servicegrid1">
					<h5>02</h5><br><br>
					<h4>Roadways Transport</h4>
				</div>
				<div class="col-md-4 servicegrid1">
					<h5>03</h5><br><br>
					<h4>Waterways Transport </h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="servicebottomgrids">
				<div class="col-md-4 servicegrid1">
					<h5>04</h5><br><br>
					<h4>Logistic Management</h4>
				</div>
				<div class="col-md-4 servicegrid1">
					<h5>05</h5><br><br>
					<h4>Delivery Unlimited</h4>
				</div>
				<div class="col-md-4 servicegrid1">
					<h5>06</h5><br><br>
					<h4>Fast & Safe Service</h4>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>


<!-- services bottom -->
<div class="Servicebottom">
	<div class="layer">
	<div class="col-md-5">
	</div>
	<div class="col-md-7 Servicebottomtext">
		<h3>Fast and Safe Transport Service</h3>
		<h3>Specialized heavy-Duty Vehicles</h3>
		<h3>Shipping Services & Logistics Management</h3>
		<h4><i class="fa fa-taxi" aria-hidden="true"></i>International Transport Deliver System</h4>
		<h4><i class="fa fa-truck" aria-hidden="true"></i>Truck Logistics Service</h4>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- //services bottom -->

<!-- team -->
	<div class="team" id="team">
		<div class="container">
		<div class="heading">
			<h3>Our Dealers</h3>
		</div>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="images/tarun.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<!--<h6>Transporters</h6> -->
							<div class="rotate">
								<p class="group1">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</p>
									<hr>
									<hr>
								<p class="group2">
									<a href="#">
										<i class="fa fa-instagram"></i>
									</a>
									<a href="#">
										<i class="fa fa-dribbble"></i>
									</a>
								</p>
							</div>
						</div>
					</div>

					<h4>Tarun Traders</h4>
					<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
					<p>17 I Aaam Bagh, Garhi Cantt Road, Dehradun City, Dehradun</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="images/shubham1.png" alt=" " class="img-responsive" />
						<div class="overlay">
							<!--<h6>Transporters</h6> -->
							<div class="rotate">
								<p class="group1">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</p>
									<hr>
									<hr>
								<p class="group2">
									<a href="#">
										<i class="fa fa-instagram"></i>
									</a>
									<a href="#">
										<i class="fa fa-dribbble"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
					<h4>Shubham Enterprises</h4>
					<p>plot -134 (K), Mokhampur, Haridwar Road, Dehradun City, Dehradun - 248001</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="images/rama.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<!--<h6>Transporters</h6> -->
							<div class="rotate">
								<p class="group1">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</p>
									<hr>
									<hr>
								<p class="group2">
									<a href="#">
										<i class="fa fa-instagram"></i>
									</a>
									<a href="#">
										<i class="fa fa-dribbble"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
					<h4>Rama Traders</h4>
					<p>Enclave Bhakti, Itbp Road, Dehradun City, Dehradun - 248001, Near Hotel Sunpark Inn</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="images/misti.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<div class="rotate">
								<p class="group1">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</p>
									<hr>
									<hr>
								<p class="group2">
									<a href="#">
										<i class="fa fa-instagram"></i>
									</a>
									<a href="#">
										<i class="fa fa-dribbble"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
					<h4>Misti Enterprises</h4>
					<p>Suddhowala, Dehradun-248001</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->


<?php
       
 include 'includes/footer.php';
   
     ?>



<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- //js-scripts -->

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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
<!-- start-smoth-scrolling -->

</body>
</html>