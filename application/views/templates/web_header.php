<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?= base_url('assets/template/frontend/'); ?>img/favicon.png" type="image/png">
        <title>Lucky Kamera</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/linericon/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>vendors/jquery-ui/jquery-ui.css"> 
        <!-- main css -->
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>css/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>css/responsive.css">
        <!-- Loader -->
        <link rel="stylesheet" href="<?= base_url('assets/template/frontend/'); ?>css/loader.css">
        <!-- SweetAlert-->
    	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </head>
    <body>

	<!-- <div class="loader" id="loader">
	  <div class="auto-center"></div><div class="bounce-conteneur">
	    <div class="bounce bounce-left"></div>
	    <div class="bounce bounce-center"></div>
	    <div class="bounce bounce-right"></div>
	  </div>
	</div> -->
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<a href="#">luckykamera@gmail.com</a>
					</div>
					<div class="float-right">
						<ul class="header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=62895378244308"><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/template/frontend/'); ?>img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<?php $uriMethod_name=$this->router->fetch_method(); ?>
								<li <?php 
									if($uriMethod_name=="index"){
										echo "class='nav-item active'";
									}else{
										echo "class='nav-item'" ; } 
									?> ><a class="nav-link" href="<?= base_url('welcome') ?>">Home</a></li>

								<li <?php 
									if($uriMethod_name=="about_us"){
										echo "class='nav-item active'";
									}else{
										echo "class='nav-item'" ; } 
									?> >
									<a class="nav-link" href="<?= base_url('welcome/about_us') ?>">TENTANG KAMI</a></li>

								<!-- <li <?php 
									if($uriMethod_name=="kategori"){
										echo "class='nav-item active'";
									}else{
										echo "class='nav-item'" ; } 
									?> >
									<a class="nav-link" href="#">KATEGORI</a></li> -->

								<li <?php 
									if($uriMethod_name=="contact_us"){
										echo "class='nav-item active'";
									}else{
										echo "class='nav-item'" ; } 
									?> >
									<a class="nav-link" href="<?= base_url('welcome/contact_us') ?>">Hubungi Kami</a></li>

								<?php 
								if ($this->session->userdata('status') == 'login') { ?>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $customers['nama_cs']; ?></a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="<?= base_url('welcome/editprofile') ?>">Edit Profile</a>
										<li class="nav-item"><a class="nav-link" href="<?= base_url('welcome/changepassword') ?>">Change Password</a>
										<li class="nav-item"><a class="nav-link" href="<?= base_url('welcome/riwayatsewa') ?>">Riwayat Sewa</a>
										<li class="nav-item"><a class="nav-link" href="<?= base_url('customers/logout') ?>">Logout</a></li>
									</ul>
								</li>
								<?php } else { ?>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('customers')  ?>">Login/Register</a></li> 
								<?php } ?>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->