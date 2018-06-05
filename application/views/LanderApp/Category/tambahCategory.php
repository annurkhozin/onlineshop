<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url()?>Admin/saveCategory" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Tambah Kategori</span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nama Kategori <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Sub Kategori <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<?php $category = $this->M__db->get_select('category__','category_id,category_name')->result();?>
				<select name="sub_category" class="form-control">
					<option value="0">Tidak ada</option>
					<?php foreach ($category as $key) { ?>
						<option value="<?=$key->category_id;?>"><?=$key->category_name;?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row form-group">

			<label class="col-sm-3 control-label">Informasi <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<textarea class="form-control summernote-example" name="information" rows="10"></textarea>
				
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