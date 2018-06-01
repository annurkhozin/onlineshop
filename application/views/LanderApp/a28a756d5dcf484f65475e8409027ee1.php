<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Develop by nurkhozin95@gmail.com</title>

	<link href="<?=base_url()?>theme/LanderApp/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container" class="panel">
	<h1>Welcome to Tranlaste Ciptasoft !</h1>
	<div id="body">
	<form class="form-horizontal" action="<?=base_url()?>Translate" method="post">
		<div class="form-group">
			<div class="col-md-12">
				<p>Masukkan Kata Kunci Encripsi</p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-4 col-xs-9">
				<input type="text" class="form-control" name="key_encode" autocomplete="off" value="<?=$key_encode?>">
			</div>
			<div class="col-md-8 col-xs-3">
				<button type="submit" class="btn btn-info">Encode</button>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<code><strong><?=$hasil_encode?></strong></code>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<p>Masukkan Kata Kunci Deskripsi</p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-4 col-xs-9">
				<input type="text" class="form-control" name="key_decode" autocomplete="off"  value="<?=$key_decode?>">
			</div>
			<div class="col-md-8 col-xs-3">
				<button type="submit" class="btn btn-info">Decode</button>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<code><strong><?=$hasil_decode?></strong></code>
			</div>
		</div>
	</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'Developer by  <strong>nurkhozin95@gmail.com</strong>' : '' ?></p>
</div>

</body>
</html>