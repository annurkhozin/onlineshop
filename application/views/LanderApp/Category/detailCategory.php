<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$where = array(
	'category_id' => $row['sub_category']
);
$sub_category = $this->M__db->cek('category__','category_id,category_name',$where)->row_array();
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$where1 = array(
	'user_id' => $row['created_by'],
	);
$created_by=$this->M__db->cek('users__','fullname',$where1)->row_array();

$where2 = array(
	'user_id' => $row['modified_by'],
	);
$modified_by=$this->M__db->cek('users__','fullname',$where2)->row_array();
?>
<form action="<?=base_url()?>Admin/saveCategory" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title"><h2>Detail Data Kategori</h2></span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nama Kategori <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" autocomplete="off" value="<?=$row['category_name']?>" disabled>
				<input type="hidden" name="category_id" value="<?=$row['category_id']?>">
				<input type="hidden" name="action" value="update">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Sub Kategori <font color="red" >*</font> :</label>
			<div class="col-sm-9">
				<?php $category = $this->M__db->get_select('category__','category_id,category_name')->result();?>
				<select name="sub_category" class="form-control">
					<?php if($sub_category['category_id']==0){ ?>
						<option value="0">Tidak ada</option>
					<?php }else{?>
						<option value="<?=$sub_category['category_id']?>"><?=$sub_category['category_name']?></option>
					<?php }

					?>
					<option value="0">Tidak ada</option>
					<?php foreach ($category as $key) { ?>
						<option value="<?=$key->category_id;?>"><?=$key->category_name;?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row form-group">

			<label class="col-sm-3 control-label">Informasi <font color="red" disabled>*</font> :</label>
			<div class="col-sm-9">
				<div class="row form-group">
						<div class="col-sm-12">
							<?=$row['information']?>
						</div>
			</div>
		</div>
		
	</div>
  	
	</div>
	<div class="row form-group">
						<label class="col-sm-3 control-label">Dibuat oleh :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$created_by['fullname']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Dirubah oleh :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$modified_by['fullname']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Tanggal Buat :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['created_date']),"d M Y H:i:s")?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Perubahan :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['modified_date']),"d M Y H:i:s")?>" disabled>
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