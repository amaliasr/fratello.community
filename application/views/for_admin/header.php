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
		<title>Fratello - Admin</title>
		<!-- Bootstrap core CSS -->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
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

			</div>
			<!-- /.container-fluid -->
		</nav>
		<div class="container" >
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>ADMIN<b><font >&nbspFratello.&nbsp</font></b></h2>
					
						
					</div>
				</div>
			</div>

			<!-- table -->
			<table class="table table-bordered">
			<tbody>
				<tr align="center" height="50">
					<td valign="center" ><a href="<?=site_url('admin')?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a></td>
					<td><a href="<?=site_url('admin/anggota')?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Anggota</a></td>
					<td><a href="<?=site_url('admin/blog')?>"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span> Bloging</a></td>
					<td><a href="<?=site_url('admin/galery')?>"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Galery</a></td>
				</tr>
			</tbody>
		</table>
		</div>
		<!-- <i class="fa fa-facebook" aria-hidden="true"></i> -->
		<!-- Modals -->
		


		