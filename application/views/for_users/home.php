<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?=base_url()?>assets/images/logo/o.png">
		<title>Fratello - Social Community</title>
		<!-- Bootstrap core CSS -->
				<!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
		<link href="<?=base_url()?>assets/carousel/sliderResponsive.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url()?>lib/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

		<style type="text/css">
			#padd {
			     padding-top: 2px;
			     padding-left: 5px;
			     padding-right: 5px;
			     padding-bottom: 2px;
			}
			hr.style3 {
				border: 0;
			    height: 1px;
			    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
			    color: grey;
			}
			q:before {
			  content: " ";
			  font-size: 24pt;
			  text-align: center;
			  line-height: 42px;
			  color: #fff;
			  float: left;
			  position: relative;
			  top: 30px;
			  border-radius: 25px;
			 
			  background: url("assets/images/quotationmark.png") -3px -3px #ddd;
			 
			  display: block;
			  height: 25px;
			  width: 25px;
			}
			q:after {
			  content: " ";
			  font-size: 24pt;
			  text-align: center;
			  line-height: 42px;
			  color: #fff;
			  float: right;
			  position: relative;
			  bottom: 40px;
			  border-radius: 25px;
			 
			  background: url("asstes/images/quotationmark.png") -1px -32px #ddd;
			 
			  display: block;
			  height: 25px;
			  width: 25px;
			}
		</style>
	</head>
	<body id="page-top">
		<!-- Navigation -->
		
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="<?=site_url('home')?>"><img src="<?=base_url()?>assets/images/logo/a.png" alt="Treviso theme logo" width="20%"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#galeri">Galeri</a>
						</li>
						<li>
							<a class="page-scroll" href="<?=site_url('blog')?>" target="_blank">Blog</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="#team">Team</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<?php $this->load->view('for_users/galeri'); ?>
		<?php //$this->load->view('for_users/blog'); ?>
		<?php $this->load->view('for_users/about'); ?>
		<?php $this->load->view('for_users/team'); ?>
		<hr class="style3">
		<?php $this->load->view('for_users/contact'); ?>

		<!-- Modals -->
		<?php //$this->load->view('for_users/modal'); ?>
		<?php $this->load->view('for_users/view_more'); ?>
		<?php //$this->load->view('for_users/view_more_blog'); ?>
		

		<!-- Footer -->
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>thppl.net</p>
			</div>
		</footer>

		

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?=base_url()?>lib/jquery/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/js/SmoothScroll.js"></script>
		<script src="<?=base_url()?>assets/js/theme-scripts.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
		<script src="<?=base_url()?>assets/carousel/sliderResponsive.js"></script>
		<script>
		$(document).ready(function() {
		  
		  $("#slider1").sliderResponsive({
		  // Using default everything
		    slidePause: 2000,
		    fadeSpeed: 800,
		    autoPlay: "on",
		    // showArrows: "off", 
		    // hideDots: "off", 
		    hoverZoom: "on", 
		    // titleBarTop: "off"
		  });
		  
		}); 
		</script>
		<script type="text/javascript">

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
    
	</body>
</html>