<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<form action="<?=base_url()?>Admin/saveCategory" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title"><h2>Detail Data Admin</h2></span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nama Admin <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="fullname" class="form-control" placeholder="Nama Admin" autocomplete="off" value="<?=$row['fullname']?>" disabled>
				<input type="hidden" name="user_id" value="<?=$row['user_id']?>">
				<input type="hidden" name="action" value="update">
			</div>
		
		</div><div class="row form-group">
			<label class="col-sm-3 control-label">Username <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" value="<?=$row['username']?>" disabled>
				<input type="hidden" name="user_id" value="<?=$row['user_id']?>">
				<input type="hidden" name="action" value="update">
			</div>
		</div>

		</div><div class="row form-group">
			<label class="col-sm-3 control-label">Username <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" value="<?=$row['username']?>" disabled>
				<input type="hidden" name="user_id" value="<?=$row['user_id']?>">
				<input type="hidden" name="action" value="update">
			</div>
		</div>
	

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