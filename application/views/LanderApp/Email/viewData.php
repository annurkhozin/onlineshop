<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-6">
<form action="<?=base_url()?>Admin/saveEmail" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Konfigurasi <?=$title?></span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nama <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="name" class="form-control" placeholder="Nama Akun Email" autocomplete="off" value="<?=$data['name']?>">
				<input type="hidden" name="email_id" value="<?=$data['email_id']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Mail User <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="smtp_user" class="form-control" placeholder="User Mail" autocomplete="off" value="<?=$data['smtp_user']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Mail Password <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="password" name="smtp_pass" class="form-control" placeholder="Mail Password" autocomplete="off" value="<?=paramDecrypt($data['smtp_pass'])?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Protokol <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<select name="protocol" class="form-control">
					<option value="<?=$data['protocol']?>"><?=strtoupper($data['protocol'])?></option>
					<option value="http">HTTP</option>
					<option value="imap">IMAP</option>
					<option value="pop3">POP3</option>
					<option value="smtp">SMTP</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Mail Host <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="smtp_host" class="form-control" placeholder="Mail Host" autocomplete="off" value="<?=$data['smtp_host']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Port <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="number" name="smtp_port" class="form-control" placeholder="Port" autocomplete="off" value="<?=$data['smtp_port']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Timeout <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="number" name="smtp_timeout" class="form-control" placeholder="SMTP Timeout" autocomplete="off" value="<?=$data['smtp_timeout']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Charset <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="charset" class="form-control" placeholder="Charset" autocomplete="off" value="<?=$data['charset']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Mail type <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="mailtype" class="form-control" placeholder="Mail type" autocomplete="off" value="<?=$data['mailtype']?>">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Validation <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<select name="validation" class="form-control">
					<option value="<?=$data['validation']?>"><?=$data['validation']?></option>
					<option value="TRUE">TRUE</option>
					<option value="FALSE">FALSE</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-9">
					<font color="red">*</font> : Wajib diisi 
			</div>
		</div>
	</div>
	<div class="panel-footer text-center">
		<button class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan <?=$title?> Baru"><i class="fa fa-plus faa-vertical"></i> Simpan</button>
	</div>
</form>
<!-- <span id="tampil"></span> -->
</div>
<div class="col-sm-6">
<form action="<?=base_url()?>Admin/savePayment" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Data <?=$title?></span>
	</div>
	<div class="panel-body">
		<?php if($error=$this->session->flashdata('error')){ ?>
		<div class="alert alert-danger alert-dark">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong><i class="fa fa-bell faa-ring animated"></i></strong> &nbsp;<span><?=$error?></span>
		</div>
		<?php }
		if($success=$this->session->flashdata('success')){ ?>
		<div class="alert alert-success alert-dark">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong><i class="fa fa-bell faa-ring animated"></i></strong> &nbsp;<span><?=$success?></span>
		</div>
		<?php }?>
		<div class="row form-group">
			<div class="col-sm-12 text-center">
                <h4><?=$data['name']?></h4>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-2 control-label">User mail&nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['smtp_user']?></label>
			</div>
			<label class="col-sm-2 control-label">Host &nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['smtp_host']?></label>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-2 control-label">Protokol&nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['protocol']?></label>
			</div>
			<label class="col-sm-2 control-label">Charset &nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['charset']?></label>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-2 control-label">Port&nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['smtp_port']?></label>
			</div>
			<label class="col-sm-2 control-label">Time Out &nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['smtp_timeout']?></label>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-2 control-label">Mail Type&nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['mailtype']?></label>
			</div>
			<label class="col-sm-2 control-label">Validation &nbsp;&nbsp;:</label>
			<div class="col-sm-4">
                <label class="control-label"><?=$data['validation']?></label>
			</div>
		</div>
	</div>
</form>
<form action="<?=base_url()?>Admin/testSendEmail" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Test Kirim <?=$title?></span>
	</div>
	<div class="panel-body">
		<?php if($errorMail=$this->session->flashdata('errorMail')){ ?>
		<div class="alert alert-danger alert-dark">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong><i class="fa fa-bell faa-ring animated"></i></strong> &nbsp;<span><?=$errorMail?></span>
		</div>
		<?php }
		if($successMail=$this->session->flashdata('successMail')){ ?>
		<div class="alert alert-success alert-dark">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong><i class="fa fa-bell faa-ring animated"></i></strong> &nbsp;<span><?=$successMail?></span>
		</div>
		<?php }?>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Email Tujuan<font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="emailto" class="form-control" placeholder="Email Tujuan">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Subject <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="subject" class="form-control" placeholder="Subject">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Pesan <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<textarea name="message" class="form-control"></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-9">
					<font color="red">*</font> : Wajib diisi 
			</div>
		</div>
	</div>
	<div class="panel-footer text-center">
		<button class="btn btn-info btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan <?=$title?> Baru"><i class="fa fa-mail-forward"></i> Kirim</button>
	</div>
</form>
</div>