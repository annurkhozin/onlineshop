<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-12">
<div class="panel-group" id="accordion-example">
	<div class="panel">
		<div class="panel-heading">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#Edit">
				Edit Data Email
			</a>
		</div> <!-- / .panel-heading -->
		<div id="Edit" class="panel-collapse collapse in">
			<form action="<?=base_url()?>Admin/saveTemplateEmail" class="panel form-horizontal" method="post" enctype="multipart/form-data">
				<div class="panel-body">
				<div class="row form-group">
					<label class="col-sm-2 control-label">Email <font color="red">*</font> :</label>
					<div class="col-sm-8">
						<input type="text" name="name" class="form-control" placeholder="Email Name" autocomplete="off" readonly value="<?=$row['name']?>">
						<input type="hidden" name="email_id" value="<?=$row['email_id']?>">
						<input type="hidden" name="action" value="update">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Subject <font color="red">*</font> :</label>
					<div class="col-sm-8">
						<input type="text" name="subject" class="form-control" placeholder="Subjek Email" autocomplete="off" value="<?=$row['subject']?>">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Isi Email <font color="red">*</font> :</label>
					<div class="col-sm-8">
						<textarea class="form-control" id="summernote-example" name="message" rows="10"><?=$row['message']?></textarea>
					</div>
				</div>
				</div> <!-- / .panel-body -->
				<div class="panel-footer text-center">
					<button type="submit" class="btn btn-default btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan perubahan"><i class="fa fa-arrow-left faa-horizontal"></i> Kembali</button>
					<button type="submit" class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan perubahan"><i class="fa fa-edit faa-vertical"></i> Simpan</button>
				</div>
			</form>
		</div> <!-- / .collapse -->
	</div> <!-- / .panel -->
</div> <!-- / .panel-group -->

</div>

<script>
	init.push(function () {
		if (! $('html').hasClass('ie8')) {
			$('#summernote-example').summernote({
				height: 350,
				tabsize: 2,
				codemirror: {
					theme: 'monokai'
				}
			});
		}
	});
</script>