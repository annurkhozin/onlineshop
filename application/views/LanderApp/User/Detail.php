<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="col-sm-7">
<div class="panel-group" id="accordion-example">
	<div class="panel">
		<div class="panel-heading">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#Edit">
				Detail Data User
			</a>
		</div> <!-- / .panel-heading -->
		<div id="Edit" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<img src="<?=base_url()?>assets/uploads/<?=$row['photo'];?>" width="30%">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Nama :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['fullname']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Username :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=paramDecrypt($row['username'])?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Tempat Tanggal Lahir :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['birthday']),"d M Y")?>" disabled>
						</div></div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Jenis Kelamin :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['gender']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Telepon :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['phone']?>" disabled>
						</div></div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Email :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['email']?>" disabled>
						</div>
					</div><div class="row form-group">
						<label class="col-sm-3 control-label">Status :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['is_active']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Tanggal Daftar :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['join_date']),"d M Y H:i:s")?>" disabled>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
