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
<div class="panel-group" id="accordion-example">
	<div class="panel">
		<button class="col-sm-12" onclick="loadEdit()">Data Pembayaran Baru</button>
	</div> <!-- / .panel -->
	<div class="panel">
		<div class="panel-heading">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#Edit">
				Detail Data Pembayaran
			</a>
		</div> <!-- / .panel-heading -->
		<div id="Edit" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="row form-group">
						<label class="col-sm-3 control-label">Nama :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['name']?>" disabled>
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
					<div class="row form-group">
						<label class="col-sm-3 control-label">Subject :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['subject']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Isi Email :</label>
					</div>
					<div class="row form-group">
						<div class="col-sm-12">
							<?=$row['message']?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>