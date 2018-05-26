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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
 <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
<script language="javascript">
	function check()
{
	var phoneno= /^\d{10}$/;
	
if(document.form1.password.value=="")
  {
alert("Plese Enter Your Password");
	document.form1.password.focus();
	return false;
  } 
if(document.form1.cpassword.value=="")
  {
alert("Plese Enter Confirm Password");
	document.form1.cpassword.focus();
	return false;
  }
if(document.form1.password.value!=document.form1.cpassword.value)
  {
alert("Confirm Password does not matched");
	document.form1.cpassword.focus();
	return false;
  }
if(document.form1.name.value=="")
  {
alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
if(document.form1.address.value=="")
  {
alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
if(document.form1.mob.value=="")
  {
alert("Plese Enter Contact No");
	document.form1.mob.focus();
	return false;
  }
  if(!(mob.value.match(phoneno)))
	{
		alert("Invalid Phone Number");
		return false;
	}
if(document.form1.email.value=="")
  {
alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
return true;

  }



</script>
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
 <?php
       
 include 'includes/header.php';
   
     ?>
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h2>Auto transport to fill</h2>
								<h4>the truck space</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>Truck Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>Ship Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>Bus Transportation</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						</div>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>independent Carriers</h3>
								<h4>auto shipping</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>Truck Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>Ship Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>Bus Transportation</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
			</li> 
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top3">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>Streamer loads in</h3>
								<h4>large Carriers</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>Ship Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>Truck Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>Bus Transportation</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top2">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>vehicles Transport</h3>
								<h4>Huge in collection</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>Ship Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>Truck Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>Bus Transportation</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
			</li>
			
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top4">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>Goods Carrying Train</h3>
								<h4>Truck shipping</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>Ship Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>Truck Transportation</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>Bus Transportation</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //Slider -->				
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Transporters
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/bg3.jpg" alt=" " class="img-responsive" />
						<p>aHn Transporters is a leading portal for the transport industry connecting transporters, customers and other related entities. Simplicity, speed and efficiency drives one's business and this is our focus as well. We allow users to share the information for expansion of services to the customers by providing better rates and vehicles.</p>
					</div>
			</div>
		</div>
	</div>
	

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
<h4 class="modal-title title1"><span style="color:orange">Sign Up</span></h4>
</div>
<div class="modal-body">
<form class="form-horizontal" name="form1" action="signup.php?q=booking.php" onSubmit="return check()" method="POST">
<fieldset>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="name"></label>
	<div class="col-md-12">
		<input id="name" name="name" placeholder="Name" class="form-control input-md" type="text" required="true">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label title1" for="email"></label>
	<div class="col-md-12">
		<input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email"  required="true">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="password"></label>
	<div class="col-md-12">
		<input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password" required="true">

	</div>
</div>

<div class="form-group">
	<label class="col-md-12control-label" for="cpassword"></label>
	<div class="col-md-12">
		<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password" required="true">

	</div>
</div>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="address" name="address" placeholder="Address" class="form-control input-md" type="text" required="true">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md"  type="number" required="true">

	</div>
</div>
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
													<!-- //Modal1 -->
<!-- //bootstrap-modal-pop-up --> 
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="col-md-7 bannerbottomleft">
			<div class="video-grid-single-page-agileits"> 
				<div data-video="d3q5mRA5djY" > <img src="images/bg2.jpg" alt="" class="img-responsive" /> </div>
			</div>
	</div>
	<div class="col-md-5 bannerbottomright">
		<h3>How Do We Work?</h3>
		<h4><i class="fa fa-taxi" aria-hidden="true"></i>National/International Transport Deliver System</h4>
		<h4><i class="fa fa-shield" aria-hidden="true"></i>Fast & Best Delivery Service</h4>
		<h4><i class="fa fa-ticket" aria-hidden="true"></i>Standard Courier value</h4>
		<h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Easy And Auto Shipping Service</h4>
		<h4><i class="fa fa-truck" aria-hidden="true"></i>Packaging & Storage</h4>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->

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

<!-- Clients -->
	<div class=" col-md-6 clients">
			<h3>Testimonials</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
								<div class="client">
									<img src="images/t1.jpg" alt="" />
									<h5>Brian Fantana</h5>
									<div class="clearfix"> </div>
								</div>
								<p>aHn Transporters should be the idol for every transporting company.</p>
								
						</li>
						<li>	
								<div class="client">
								<img src="images/t2.jpg" alt="" />
									<h5>Brick Tamland</h5>
									<div class="clearfix"> </div>
								</div>
								<p>Good service, good transportation, good employees. Altogether a good transport service provider and one of the best movers and packers.</p>
								
						</li>
						<li>
								<div class="client">
								<img src="images/t3.jpg" alt="" />
									<h5>Ron Burgundy</h5>
									<div class="clearfix"> </div>
								</div>
								<p>Highly recommended transportation service provider.</p>
								
						</li>
						<li>
								<div class="client">
								<img src="images/t4.jpg" alt="" />
									<h5>Arturo Mendez</h5>
									<div class="clearfix"> </div>
								</div>
								<p>Surely 9 on a scale of 10 for the services they provide and the way they treat the customers.</p>
								
						</li>
					</ul>
				</div>
			</section>
</div>
<!-- //Clients -->
<!-- Counter -->
	<div class="col-md-6 services-bottom">
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">1126</p> 
					<h3>Transport vehicles</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-fighter-jet" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">180</p> 
					<h3>International Service</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">20</p>
					<h3>Years Of Service</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">800</p>
					<h3>Happy clients</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
			<div class="clearfix"> </div>
<!-- //Counter -->


<!-- our blog -->
<section class="blog" id="blog">
	<div class="container">
		<div class="heading">
			<h3>Latest News</h3>
		</div>
		<div class="blog-grids">
		<div class="col-md-4 blog-grid">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/bg4.jpg" alt="" /></a>
			<h5>April 10,2018</h5>
			<h4><a href="#" data-toggle="modal" data-target="#myModal">Road Way Transport</a></h4>
			<p> The road transportation service is the oldest means of transportation service of the company.</p>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
		<div class="col-md-4 blog-grid">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/bg7.jpg" alt="" /></a>
			<h5>April 17,2018</h5>
			<h4><a href="#" data-toggle="modal" data-target="#myModal">Water Way Transport</a></h4>
			<p>Water way transport reaches the places far from the road way transport.</p>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
		<div class="col-md-4 blog-grid">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/bg8.jpg" alt="" /></a>
			<h5>April 26,2018</h5>
			<h4><a href="#" data-toggle="modal" data-target="#myModal">Rail Transport</a></h4>
			<p>aHn Tranporters also provide train cart service.</p>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- //our blog -->

<?php
	include 'includes/footer.php';
?>
	



<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

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

<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
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

<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
</script>
<!-- //banner bottom video script -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 100,
							time: 1000
						});
					});
				</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->


<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->

<!-- //js-scripts -->
</body>
</html>