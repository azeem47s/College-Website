<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Companies Visited</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="http://www.gbpec.edu.in/assets/images/logo_new.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	</head>
<style>
.logo{
		width:100px;
		height:50px;
	}

@media (max-width: 650px){
	.logo{
		width:60px;
		height:50px;
	}

};
@media (max-width: 650px){
	.placement{
	position: absolute;
	left:auto;
	transform: scale(0.8);
}
}
</style>
       

	<body >
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
<?php include 'navbar.php';?>

			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->
			<section class="inner-page-banner">
				<div class="opacity">
					<div class="container">
				
						<ul>
							<li><a href="index.html"></a></li>
				
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /.inner-page-banner -->
			


		<div class="theme-title">
			<h2>Companies Visited</h2>
			<p></p>
		</div> <!-- /.theme-title -->




		<!--
			=====================================================
				Partner Section
			=====================================================
			-->
			<div id="partner-section">
				<div class="container">
					<div id="partner_logo" class="owl-carousel owl-theme">
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-3.3em;" src="images/logo/infosys.jpg" alt="logo"></div>
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-3.3em;" src="images/logo/wipro.jpg" alt="logo"></div>
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-3.3em;" src="images/logo/hyundai.jpg" alt="logo"></div>
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-3.3em;" src="images/logo/tcs1.jpg" alt="logo"></div>
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-3.3em;" src="images/logo/mahindra.png" alt="logo"></div>
						<div class="item"><img style="transform:scale(0.5); position: relative;margin-top:-6em;" src="images/logo/qspider.jpeg" alt="logo"></div>
					</div> <!-- End .partner_logo -->
				</div> <!-- /.container -->
			</div> <!-- /#partner-section -->



</div>













<br>
<br>
<br>
<!-- Footer -->
<?php include 'footer.php';?>





			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>


   <!-- Scroll Top Button -->
   <button class="scroll-top tran3s p-color-bg">
	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</button>