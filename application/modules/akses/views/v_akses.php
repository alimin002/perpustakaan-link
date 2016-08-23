<!DOCTYPE html>
<html lang="en" class="no-js">
	<title>Perpustakaan Link</title>
	<meta name="author" content="Amit Bajracharya">
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	

	<script src="<?php echo base_url(); ?>themes/aceadmin/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>libs/freecss.com/assets/bootstrap/js/bootstrap.js"></script>

	

	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/freecss.com/assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/freecss.com/assets/fontawesome/css/font-awesome.css">
	

	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/css/component.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/freecss.com/assets/animate.css" >
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/freecss.com/style.css">


	
</head>
<body>
<!-- header -->
<div id="top" class="header-bg fullpage">
<div class="header fullpage">
	<div class="container">
		<div class="absolute-center">
		<div class="row">
			<div class="col-sm-7">
				<h1 class="info animated fadeInDown"><a href="" class="logo">Aplikasi<br>Tata Kelola  <u>Link</u></a> Website </h1>
				<h3 class="info animated fadeInDown">Jangan Biarkan Link website yang membantu belajar anda, lupa begitu saja simpan dan kelola semuanya disini gratis</h3>
				<a href="#works" class="btn scroll animated bounceInUp" id="btn_daftar">Daftar</a><a href="#contact" class="btn scroll animated bounceInDown" id="btn_login">Login</a>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div class="connect-icon">
						<div class="prof-links clearfix animated bounceInUp">
						<a href="#"><img alt="portfolio" src="<?php echo base_url(); ?>libs/freecss.com/images/linked.png" height="48"></a>
						<a href="#"><img alt="portfolio" src="<?php echo base_url(); ?>libs/freecss.com/images/dribbble.png" height="48"></a>
						<a href="#" class="behance"><img alt="portfolio" src="<?php echo base_url(); ?>libs/freecss.com/images/behance.png"></a>						
						</div>
						<h3 style="color:white;">Login Dengan</h3>
						<div class="social  clearfix  animated bounceInDown">
						<a href="#"><img alt="portfolio" src="<?php echo base_url(); ?>libs/freecss.com/images/facebook.png" width="32"></a>
						<a href="#"><img alt="portfolio" src="<?php echo base_url(); ?>libs/freecss.com/images/twitter.png"  width="32"></a>				
						</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
<!-- header -->


<div class="content-body">
	
    

<!-- works -->
<div id="works" class="portfolio spacer">
<div class="container">
</div>

<a href="#top" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

		
		<!-- gridloading script -->
		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/js/masonry.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/js/imagesloaded.js"></script>
		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/gridloading/js/AnimOnScroll.js"></script>
		<!-- gridloading script -->


		<script src="<?php echo base_url(); ?>libs/freecss.com/assets/scripts.js"></script>

</body>
<script>
     $( "#btn_login" ).click(function() {
     location.href = "<?php echo base_url(); ?>/index.php/login/c_login";
     });
	 $( "#btn_daftar" ).click(function() {
     location.href = "<?php echo base_url(); ?>/index.php/register/c_register";
     });
</script>
</html>