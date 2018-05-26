<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['cid']))
{?>
<html lang="en">
<head>
<title>SSA SUPLLIERS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
<style type="text/css">
	.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1.4rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    font-family: 'Avenir Next', Avenir, 'Helvetica Neue', 'Lato', 'Segoe UI', Helvetica, Arial, sans-serif;
    
}
</style>
</head>
<body>
 <?php
       
 include 'includes/header.php';
   
     ?>

<div class="banner2">
	<div class="col-md-4 pull-right">
								<div class="banner-form-agileinfo">
									<h5>Need To <span>Transport</span>?</h5>
									<p>Enter Your Details</p>
									<form action="loadsignup.php" method="post">
										<input type="text" class="text" name="source" placeholder="Source" required="">
										<input type="text" class="text" name="destination" placeholder="Destination" required="">
										<input type="text" class="text" name="weight" placeholder="Enter weight of Load" required="">
										<select class=" form-control option-w3ls" name="type">
											<option value="truck">Truck</option>
											<option value="minitruck">Mini truck</option>
										</select>
										<!--<input type="date">-->
										<input type="date" class="form-control input-group date" required="required" name="date" placeholder="Choose Your Loading Date">
										<input type="submit" class="hvr-shutter-in-vertical" value="Book Now">  	
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
</div>

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
<!-- Datepicker -->
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

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
<?php 
}
else
{
header("location:index.php?w= You are not Logged in please first login");
}?>
</body>
</html>