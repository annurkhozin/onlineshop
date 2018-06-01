<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel-group" id="accordion-example">
	<div class="panel">
		<button class="col-sm-12" onclick="loadEdit()">Data Pembayaran Baru</button>
	</div> <!-- / .panel -->
	<div class="panel">
		<div class="panel-heading">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#Edit">
				Edit Data Pembayaran
			</a>
		</div> <!-- / .panel-heading -->
		<div id="Edit" class="panel-collapse collapse in">
			<form action="<?=base_url()?>Admin/savePayment" class="panel form-horizontal" method="post" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<img src="<?=base_url()?>assets/uploads/<?=$row['payment_logo'];?>" width="30%">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Pembayaran <font color="red">*</font> :</label>
						<div class="col-sm-9">
							<input type="hidden" name="action" value="update">
							<input type="hidden" class="form-control" name="payment_id" value="<?=$row['payment_id']?>" >
							<input type="hidden" class="form-control" name="logo_old" value="<?=$row['payment_logo']?>" >
							<input type="text" name="payment_name" class="form-control" placeholder="Nama Pembayaran (BANK)" autocomplete="off" value="<?=$row['payment_name']?>">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Pemilik Akun <font color="red">*</font> :</label>
						<div class="col-sm-9">
							<input type="text" name="payment_account_name" class="form-control" placeholder="Nama Pemilik Akun (Atas Nama)" autocomplete="off" value="<?=$row['payment_account_name']?>">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Nomor Akun <font color="red">*</font> :</label>
						<div class="col-sm-9">
							<input type="text" name="payment_number" class="form-control" placeholder="Nomor Akun" autocomplete="off" value="<?=$row['payment_number']?>">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Logo :</label>
						<div class="col-sm-9">
							<input type="file" name="file" id="file" class="form-control upload-file" autocomplete="off"  accept="image/*">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-9">
								<font color="red">*</font> : Wajib diisi 
						</div>
					</div>
				</div> <!-- / .panel-body -->
				<div class="panel-footer text-center">
					<button type="submit" class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" onclick="btnsave()" data-original-title="Simpan perubahan"><i class="fa fa-edit faa-vertical"></i> Simpan</button>
				</div>
			</form>
		</div> <!-- / .collapse -->
	</div> <!-- / .panel -->
</div> <!-- / .panel-group -->
<script type="text/javascript">
	$('#cs-datepicker').datepicker();
	$('.upload-file').pixelFileInput({ placeholder: 'No file selected...' });
	window.LanderApp.start(init);
</script>