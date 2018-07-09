<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-12">
<div class="panel">
	<div class="panel-body">
		<a href="<?=base_url().'Admin/tambahAdmin'?>" class="btn btn-success">Tambah Admin</a>
	</div>
		<div class="table-Light">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="datatables">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Status</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($allData->result() as $row){ ?>
					<tr class="odd gradeX">
						<td><?=$no?></td>
						<td><?=$row->fullname?></td>
						<td class="text-center">
							<?php if($row->is_active==1){ ?>
								<a href="<?=base_url().'Admin/statusAdmin/'.$row->user_id.'/0'?>" class="label label-info">Aktif</a>
							<?php }else{ ?>
								<a href="<?=base_url().'Admin/statusAdmin/'.$row->user_id.'/1'?>" class="label label-danger">Nonaktif</a>
							<?php }?>
						</td>
						<td class="text-center" style="width: 30%;">
							<button class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..."  data-original-title="Detail <?=$row->fullname?>" onclick="loadEdit(<?=$row->user_id?>,'detail')"><i class="fa fa-eye faa-vertical"></i></button>

								<a href="<?=base_url().'Admin/updateAdmin/'.$row->user_id?>" class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit <?=$row->fullname?>"><i class="fa fa-edit faa-vertical"></i></button>
													
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
			
		</div>
	</div>
</div>
<span id="tampil-box">
</span>
<script>
	function loadEdit(id,action){
		$.ajax({
          type:"POST",
          url:"<?=base_url()?>AdminCTRL/loadData",
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
		$('#datatables_wrapper .table-caption').text('Data Admin');
		$('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
</script>