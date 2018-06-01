<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function path_adm(){
		echo base_url()."assets/LanderApp";
	}
$timezone;
?>
<!DOCTYPE html>
<html class="gt-ie8 gt-ie9 not-ie">
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
	<link href="<?=path_adm()?>/css/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/css/themes.min.css" rel="stylesheet" type="text/css">
	<link href="<?=path_adm()?>/fonts/animation.css" rel="stylesheet" type="text/css">
</head>
<body class="theme-default main-menu-animated" id="tooltip">
<script>var init = [];</script>
	<script src="<?=path_adm()?>/js/demo.js"></script>
<div id="main-wrapper">
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon faa-horizontal animated"></i><span class="hide-menu-text">HIDE MENU</span></button>
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="<?=base_url()?>Admin/Beranda.cs" class="navbar-brand">
					<strong><?=$info['name_app']?></strong>
				</a>
				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"><i class="fa fa-map-marker"></i> Server Time Zone <b><?php $zone = explode('/',$info['timezone']); echo $zone[1]?></b></a>
						</li>
						<li>
							<a href="#">&nbsp;&nbsp;<span id="header_date"></span></a>
						</li>
						<li>
							<a href="#">&nbsp;&nbsp;<b><span id="header_jam"></b></span></a>
						</li>
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">							
							<li>
								<a href="#">Welcome, <strong><?=$info['user_fullname']?></strong></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="<?php if($info['user_photo']!=null){
										echo base_url().'assets/avatars/'.$info['user_photo'];
									}else{
										echo base_url().'assets/avatars/user_default.png';
									}?>
									" >
									<span><?//=$role_user?></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?=base_url()?>Destroy" onclick="return confirm('Anda yakin ingin Keluar!'); "><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->
	<?php include 'Menu.php';?>
	
<!-- /4. $MAIN_MENU -->
	<div id="content-wrapper">
		<div class="page-header">
			<h1><i class="fa fa-eye page-header-icon"></i>&nbsp;&nbsp;<?=$title?></h1>
		</div> <!-- / .page-header -->
		<!-- isi content -->
	<?php if($content){
				include $content;
			} 
		?>
		
	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="<?=path_adm()?>/js/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->

<!-- LanderApp's javascripts -->
<script src="<?=path_adm()?>/js/bootstrap.min.js"></script>
<script src="<?=path_adm()?>/js/landerapp.min.js"></script>
<script src="<?=path_adm()?>/js/cs-animation.js"></script>

<!-- Google Maps -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->

<script type="text/javascript">
	init.push(function () {
		$('#tooltip button').tooltip();
	});
	$('#cs-datepicker').datepicker();
	$(".cs-select").select2({
			allowClear: true,
			placeholder: "Pilih salah satu"
	});
	$(".cs-multiple").select2({
		allowClear: true,
		placeholder: "Pilihan multiple"
	});
	window.LanderApp.start(init);
</script>
<script>
	init.push(function () {
		$('.upload-file').pixelFileInput({ placeholder: 'No file selected...' });
	})
</script>
<script>
	init.push(function () {
		if (! $('html').hasClass('ie8')) {
			$('.summernote').summernote({
				height: 400,
				tabsize: 2,
				codemirror: {
					theme: 'monokai'
				}
			});
		}
	});
</script>
<script language="JavaScript">
      function show(){
      var Digital=new Date();
      var hours=Digital.getHours();
      var minutes=Digital.getMinutes();
      var seconds=Digital.getSeconds();
      var day=Digital.getDate();
      var years=Digital.getFullYear();
      var month = new Array();
		month[0] = "January";
		month[1] = "February";
		month[2] = "March";
		month[3] = "April";
		month[4] = "May";
		month[5] = "June";
		month[6] = "July";
		month[7] = "August";
		month[8] = "September";
		month[9] = "October";
		month[10] = "November";
		month[11] = "December";
		var month = month[Digital.getMonth()];
      if (hours<=9){
        hours="0"+hours;
      }
      if (minutes<=9){
        minutes="0"+minutes;
      }
      if (seconds<=9){
        seconds="0"+seconds;
      }
      var tampil=hours+":"+minutes+":"+seconds;
      var tampil_day=day+" "+month+" "+years;
      document.getElementById("header_jam").innerHTML=tampil;
      document.getElementById("header_date").innerHTML=tampil_day;
      setTimeout("show()",1000);
    }
    show();
    function Mustnumber(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
      return true;
    }
  </script>
</body>
</html>
