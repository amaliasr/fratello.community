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
							<a class="page-scroll" href="<?=site_url('home')?>#galeri">Galeri</a>
						</li>
						<li>
							<a class="page-scroll" href="<?=site_url('blog')?>">Blog</a>
						</li>
						<li>
							<a class="page-scroll" href="<?=site_url('home')?>#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="<?=site_url('home')?>#team">Team</a>
						</li>
						<li>
							<a class="page-scroll" href="<?=site_url('home')?>#contact">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
</nav>
<section id="blog">
			<div class="container">
			
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<?php
						$anggota = $this->m_global->tampil('anggota','id_anggota');
						// $anggota = $this->db->query("SELECT * FROM anggota
						// 								WHERE (SELECT anggota.* IS NULL)");
						foreach ($anggota as $key) {				
					?>
					<div class="col-md-4">
						<div class="team-item">
							<div class="team-image" align="center">
								<br>
								<a href="<?=site_url('team/team_view/').$key->id_anggota;?>"><img style="width: auto ;height:200px" src="<?=base_url()?>upload/original/<?=$key->photo_profile;?>" alt="Project 1 image" class="img-circle underlay"></a>
							</div>

							<div class="team-text">
								<h3><?=$key->nama_anggota;?></h3>
								<p>Social Media<br>
								<a href="http://<?=$key->facebook;?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color: black "></i></a>
								<a href="http://<?=$key->twitter;?>"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color: black"></i></a>
								<a href="http://<?=$key->instagram;?>"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: black"></i></a>
								<a href="http://<?=$key->gmail;?>"><i class="fa fa-envelope fa-2x" aria-hidden="true" style="color: black"></i></a>
								</p>
							</div>
						</div>
					</div>
					<?php
					} 
					?>					

					<!-- end team member item -->
				</div>
					

					<!-- end team member item -->
					
				</div>
				<!-- <center>
					<a href="<?=site_url('home/view_more_blog')?>" data-toggle="modal" data-target="#Modal-7"><button type="button" class="btn btn-default" style="background-color: black;color: white">View More</button></a>
				</center> -->
				
			</div>


		</section>
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
    
	</body>
</html>