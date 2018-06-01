<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-5" id="tampil-box">
<form action="<?=base_url()?>Admin/savePayment" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title">Data <?=$title?> Baru</span>
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
			<label class="col-sm-3 control-label">Pembayaran <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_name" class="form-control" placeholder="Nama Pembayaran (BANK)" autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Pemilik Akun <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_account_name" class="form-control" placeholder="Nama Pemilik Akun (Atas Nama)" autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Nomor Akun <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="payment_number" class="form-control" placeholder="Nomor Akun" autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Logo <font color="red">*</font> :</label>
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
	</div>
	<div class="panel-footer text-center">
		<button class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan <?=$title?> Baru" onclick="btnSave()"><i class="fa fa-plus faa-vertical"></i> Simpan</button>
	</div>
</form>
<!-- <span id="tampil"></span> -->
</div>
<div class="col-sm-7">
<div class="panel">
	<div class="panel-body">
		<div class="table-primary">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Pembayaran</th>
						<th>Atas Nama</th>
						<th>Nomor Akun</th>
						<th>Status</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($allData->result() as $row){ ?>
					<tr class="odd gradeX">
						<td><?=$no?></td>
						<td><?=$row->payment_name?></td>
						<td><?=$row->payment_account_name?></td>
						<td><?=$row->payment_number?></td>
						<td class="text-center">
							<?php if($row->is_active==1){ ?>
								<a href="<?=base_url().'Admin/statusPayment/'.$row->payment_id.'/0'?>" class="label label-info">Aktif</a>
							<? }else{ ?>
								<a href="<?=base_url().'Admin/statusPayment/'.$row->payment_id.'/1'?>"class="label label-danger">Nonaktif</a>
							<? }?>
						</td>
						<td class="text-center" style="width: 30%;">
							<button class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..."  data-original-title="Detail <?=$row->payment_name.' - '.$row->payment_account_name?>" onclick="loadEdit(<?=$row->payment_id?>,'detail')"><i class="fa fa-eye faa-vertical"></i></button>
							<button class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit <?=$row->payment_name.' - '.$row->payment_account_name?>" onclick="loadEdit(<?=$row->payment_id?>,'edit')"><i class="fa fa-edit faa-vertical"></i></button>							
						</td>
					</tr>
				<?php $no++; }?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="panel-footer">
		<div class="text-center">Keterangan : 
			<button class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..."  data-original-title="Detail Data" ><i class="fa fa-eye faa-vertical"></i> Detail Data</button>
			<button class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="fa fa-edit faa-vertical"></i> Edit Data</button>
		</div>
	</div>
</div>
</div>
<script>
	function loadEdit(id,action){
		$.ajax({
          type:"POST",
          url:"<?=base_url()?>PaymentCTRL/loadData",
          data:{id:id, action:action},
          cache:false,
          success:function(a){
            $('#tampil-box').html(a);
          }
        });
	}
</script>
<script>
	init.push(function () {
		$('#jq-datatables-example').dataTable();
		$('#jq-datatables-example_wrapper .table-caption').text('Data Pembayaran');
		$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
</script>