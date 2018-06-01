<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function path_adm(){
		echo base_url()."assets/LanderApp";
	}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?=$title.' | '.$info['title_app']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="<?=base_url().'assets/images/'.$info['favicon_app']?>">
	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- LanderApp's stylesheets -->
	<link href="<?=path_adm()?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/pages.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/themes.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/fonts/animation.css" rel="stylesheet" type="text/css">
	<style>
		#signin-demo {
			position: fixed;
			right: 0;
			bottom: 0;
			z-index: 10000;
			background: rgba(0,0,0,.6);
			padding: 6px;
			border-radius: 3px;
		}
		#signin-demo img { cursor: pointer; height: 40px; }
		#signin-demo img:hover { opacity: .5; }
		#signin-demo div {
			color: #fff;
			font-size: 10px;
			font-weight: 600;
			padding-bottom: 6px;
		}
	</style>
</head>
<body class="theme-default page-signin">
	<script>
		var init = [];
	</script>
	<script src="<?=path_adm()?>/js/demo.js"></script>
	<!-- Page background -->
	<div id="page-signin-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img src="<?=base_url().'assets/images/'.$info['bg_login'];?>" alt="" width="100%">
	</div>
	<!-- / Page background -->
	<!-- Container -->
	<div class="signin-container">
		<!-- Left side -->
		<div class="signin-info">
			<center>
				<a href="<?=base_url()?>" class="logo">
					<img src="<?=base_url().'assets/images/'.$info['logo_app'];?>" width="70%">
				</a> <!-- / .logo -->
				<div class="logo">
					<?=$info['name_app']?>
				</div>
				<div class="slogan">
					<?=$info['deskripsi_app']?>
				</div> <!-- / .slogan -->
			</center>
		</div>
		<!-- / Left side -->
		<!-- Right side -->
		<div class="signin-form">
			<!-- Form -->
			<form action="<?=base_url()?>cekLogin" id="signin-form_id" method="post">
				<div class="signin-text">
					<span>Sign In to your account</span>
				</div> <!-- / .signin-text -->
				<?php if($error=$this->session->flashdata('error')){ ?>
					<div class="alert alert-danger alert-dark">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong><i class="fa fa-bell faa-ring animated"></i></strong> &nbsp;<?=$error?></span>
					</div>
					<?php }?>
				<div class="form-group w-icon">
					<input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username" autocomplete="off">
					<span class="fa fa-user signin-form-icon"></span>
				</div> <!-- / Username -->

				<div class="form-group w-icon">
					<input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password" autocomplete="off">
					<span class="fa fa-lock signin-form-icon"></span>
				</div> <!-- / Password -->
				
				<div class="form-actions text-center">
					<!-- <input type="submit" value="SIGN IN" class="signin-btn bg-primary"> -->
					<!-- <a href="#" class="forgot-password" id="forgot-password-link">Forgot your password?</a> -->
					<a href="#" class="forgot-password" id="forgot-password-link">Lupa Password</a>
				</div> <!-- / .form-actions -->
				<div class="form-actions text-center">
					<button type="submit" class="btn signin-btn bg-info" id="cs1">SIGN IN</button>
				</div>
			</form>
			<!-- / Form -->
			<!-- Password reset form -->
			<div class="password-reset-form" id="password-reset-form">
				<div class="header">
					<div class="signin-text">
						<span>Password reset</span>
						<div class="close">&times;</div>
					</div> <!-- / .signin-text -->
				</div> <!-- / .header -->
				<!-- Form -->
				<form action="" id="password-reset-form_id">
					<div class="form-group w-icon">
						<input type="text" name="password_reset_email" id="email_id" class="form-control input-lg" placeholder="Enter your email" autocomplete="off">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email --><br><br>
					<div class="form-actions text-center">
						<!-- <input type="submit" value="SIGN IN" class="signin-btn bg-primary"> -->
						<a href="#" class="forgot-password" id="sig-in-form">Back to Sig In</a>
					</div> <!-- / .form-actions -->
					<div class="form-actions text-center">
						<button type="submit" class="btn signin-btn bg-info" id="cs2">SEND PASSWORD</button>
					</div> <!-- / .form-actions -->
				</form>
				<!-- / Form -->
			</div>
			<!-- / Password reset form -->
		</div>
		<!-- Right side -->
	</div>
	<!-- / Container -->
<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="<?=path_adm()?>/js/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!-- LanderApp's javascripts -->
<script src="<?=path_adm()?>/js/bootstrap.min.js"></script>
<script src="<?=path_adm()?>/js/landerapp.min.js"></script>
<script src="<?=path_adm()?>/js/cs-animation.js"></script>
<script type="text/javascript">
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signin-bg'),
		    $img = $ph.find('> img');

		$(window).on('resize', function () {
			$img.attr('style', '');
			if ($img.height() < $ph.height()) {
				$img.css({
					height: '100%',
					width: 'auto'
				});
			}
		});
	});

	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form .close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
		$('#sig-in-form').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});

	// Setup Sign In form validation
	init.push(function () {
		$("#signin-form_id").validate({ 
				focusInvalid: true, 
				 });
			// Validate username
			$("#username_id").rules("add", {
				required: true
			});
			// Validate password
			$("#password_id").rules("add", {
				required: true
			});
	});
	// Setup Password Reset form validation
	init.push(function () {
		$("#password-reset-form_id").validate({ focusInvalid: true,});
		// Validate email
		$("#email_id").rules("add", {
			required: true,
			email: true
		});
	});
	window.LanderApp.start(init);
</script>
</body>
</html>
