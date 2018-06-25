<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url()?>Admin/savePayment" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Data Pembayaran Baru</span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Pembayaran <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_name" class="form-control" placeholder="Nama Pembayaran (BANK)" autocomplete="off" required>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Pemilik Akun <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_account_name" class="form-control" placeholder="Nama Pemilik Akun (Atas Nama)" autocomplete="off" required>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nomor Akun <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_number" class="form-control" placeholder="Nomor Akun" autocomplete="off" required>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Logo <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="file" name="file" id="file" class="form-control upload-file" autocomplete="off"  accept="image/*" required>
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
		<button class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan Pembayaran Baru" onclick="btnSave()"><i class="fa fa-plus faa-vertical"></i> Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$('#cs-datepicker').datepicker();
	$('.upload-file').pixelFileInput({ placeholder: 'No file selected...' });
	window.LanderApp.start(init);
</script>