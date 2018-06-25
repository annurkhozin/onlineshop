<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-12">
<div class="modal fade modalTambah" tabindex="-1" role="dialog" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
			</div>
			<div class="modal-body">
			<form action="<?=base_url()?>Admin/saveProduct" class="form-horizontal" method="post" enctype="multipart/form-data" >
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
						<div class="dropzone-box dropzonejs">
							<div class="dz-default dz-message">
								<i class="fa fa-cloud-upload"></i>
								Drop files in here<br><span class="dz-text-small">or click to pick manually</span>
							</div>
							<div class="fallback">
								<!-- <input type="file" name="file" class="form-control" placeholder="Nama Pemilik Akun (Atas Nama)" autocomplete="off"> -->
								<input name="file" type="file" multiple="" />
							</div>
							
						</div>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-9">
							<font color="red">*</font> : Wajib diisi 
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>			
		</div>
	</div> 
</div>

<div class="panel">
	<div class="panel-heading">
		<button class="btn btn-success btn-lg btn-outline faa-parent animated-hover"  data-toggle="modal" data-target=".modalTambah" data-placement="top" title="" data-loading-text="Loading..." ><i class="fa fa-plus faa-vertical"></i> Produk</button>
	</div>
	<div class="panel-body">
		<div class="table-Light">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="datatables">
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
							<?php }else{ ?>
								<a href="<?=base_url().'Admin/statusPayment/'.$row->payment_id.'/1'?>"class="label label-danger">Nonaktif</a>
							<?php }?>
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
	init.push(function () {
		$('.datatables').dataTable();
		$('#datatables_wrapper .table-caption').text('Data Pembayaran');
		$('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
</script>
<script>
	init.push(function () {
		$(".dropzonejs").dropzone({
			url: "<?=base_url()?>Admin/saveProduct",
			paramName: "file", // The name that will be used to transfer the file
			maxFilesize: 5, // MB

			addRemoveLinks : true,
			dictResponseError: "Can't upload file!",
			autoProcessQueue: false,
			thumbnailWidth: 138,
			thumbnailHeight: 120,

			previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',

			resize: function(file) {
				var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
					srcRatio = file.width / file.height;
				if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
					info.trgHeight = this.options.thumbnailHeight;
					info.trgWidth = info.trgHeight * srcRatio;
					if (info.trgWidth > this.options.thumbnailWidth) {
						info.trgWidth = this.options.thumbnailWidth;
						info.trgHeight = info.trgWidth / srcRatio;
					}
				} else {
					info.trgHeight = file.height;
					info.trgWidth = file.width;
				}
				return info;
			}
		});
	});
</script>