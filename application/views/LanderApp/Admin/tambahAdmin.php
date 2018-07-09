<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url()?>Admin/saveAdmin" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Tambah Admin</span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nama Admin <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="fullname" class="form-control" placeholder="Nama Admin" autocomplete="off">
			</div>
		</div>
		
		<div class="row form-group">
			<label class="col-sm-3 control-label">Username <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="fullname" class="form-control" placeholder="Username" autocomplete="off">
			</div>
		</div>

		<div class="row form-group">
			<label class="col-sm-3 control-label">Password <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="fullname" class="form-control" placeholder="Password" autocomplete="off">
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
<script>
	init.push(function () {
		if (! $('html').hasClass('ie8')) {
			$('.summernote-example').summernote({
				height: 350,
				tabsize: 2,
				codemirror: {
					theme: 'monokai'
				}
			});
		}
	});
</script>