<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-6" id="tampil-box">
<form action="<?=base_url()?>Admin/saveTemplateEmail" class="panel form-horizontal" method="post" enctype="multipart/form-data" >
	<div class="panel-heading">
		<span class="panel-title"><?=$title?> Baru</span>
	</div>
	<div class="panel-body">
		<div class="row form-group">
			<label class="col-sm-3 control-label">Email <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="name" class="form-control" placeholder="Email Name" autocomplete="off" required>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-sm-3 control-label">Subject <font color="red">*</font> :</label>
			<div class="col-sm-9">
				<input type="text" name="subject" class="form-control" placeholder="Subjek Email" autocomplete="off" required>
			</div>
		</div>

		<textarea class="form-control summernote-example" name="message" rows="10" required>
			<center style="width:100%;table-layout:fixed">
				<div style="max-width:600px">
					<table style="border-spacing:0;font-family:sans-serif;color:#333333;Margin:0 auto;width:100%;max-width:600px; border: 1px solid #BFBFBF; box-shadow: 3px 5px 3px #aaa;" align="center">
						<tbody>
							<tr>
								<td style="background:#42b549"><br></td>
							</tr>
							<tr>
								<td style="background-color:#ffffff;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;width:100%;text-align:left;color:#333333;font-size:14px">Hai {$name_user},<br><div><br></div><div>Isi pesan email disini...<br></div><div><br></div><div>Salam.</div>{$name_system}<br><br><br></td>
							</tr>
							<tr>
								<td style="background-color: rgb(255, 255, 255); padding: 10px 20px; width: 100%; text-align: center; color: rgb(51, 51, 51); font-size: 12px;">© 2018 {$name_system}<br></td>
							</tr><tr>
								<td style="background:#42b549"><br></td>
							</tr>
						</tbody>
					</table>
				</div>
			</center>
		</textarea>
	</div>
	<div class="panel-footer text-center">
		<button class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan <?=$title?> Baru" onclick="btnSave()"><i class="fa fa-plus faa-vertical"></i> Simpan</button>
	</div>
</form>
</div>
<div class="col-sm-6">
<div class="panel">
	<div class="panel-body">
		<div class="table-Light">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="datatables">
				<thead>
					<tr>
						<th>No</th>
						<th>Subject</th>
						<th>Status</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($allData->result() as $row){ ?>
					<tr class="odd gradeX">
						<td><?=$no?></td>
						<td><?=$row->subject?></td>
						<td class="text-center">
							<?php if($row->is_active==1){ ?>
								<a href="<?=base_url().'Admin/statusEmail/'.$row->email_id.'/0'?>" class="label label-info">Aktif</a>
							<?php }else{ ?>
								<a href="<?=base_url().'Admin/statusEmail/'.$row->email_id.'/1'?>"class="label label-danger">Nonaktif</a>
							<?php }?>
						</td>
						<td class="text-center" style="width: 30%;">
							<button class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..."  data-original-title="Detail <?=$row->subject?>" onclick="loadEdit(<?=$row->email_id?>,'detail')"><i class="fa fa-eye faa-vertical"></i></button>
							<a href="<?=base_url().'Admin/updateEmail/'.$row->email_id?>" class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit <?=$row->subject?>"><i class="fa fa-edit faa-vertical"></i></button>							
						</td>
					</tr>
				<?php $no++; }?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="panel-footer">
		<div class="text-center">Keterangan : 
			<button class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..." data-original-title="Detail Data"><i class="fa fa-eye faa-vertical"></i> Detail Data</button>
			<button class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="fa fa-edit faa-vertical"></i> Edit Data</button>
		</div>
	</div>
</div>
</div>
<script>
	function loadEdit(id,action){
		$.ajax({
          type:"POST",
          url:"<?=base_url()?>EmailCTRL/loadData",
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
		$('.datatables').dataTable();
		$('#datatables_wrapper .table-caption').text('Konten Email');
		$('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
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