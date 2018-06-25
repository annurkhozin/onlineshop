<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-12">
<div class="panel">
<div class="panel-heading">
		<a href="<?=base_url().'Admin/tambahProduk'?>" class="btn btn-success">Tambah Produk</a>
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
		
		<div class="table-Light">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="datatables">
				<thead>
					<tr>
						<th>Id Produk</th>
						<th>Nama Produk</th>
						<th>Stok</th>
						<th>Kategori</th>
						<th>Gambar</th>
						<th>Status</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					
					<?php $no=1; foreach($allData->result() as $row){ ?>
					<tr class="odd gradeX">
						<td><?=$no?></td>
						<td><?=$row->product_name?></td> 
					<!-- 	<td><?=$row->sub_category?></td>  -->
						<td class="text-center">
							<?php if($row->is_active==1){ ?>
								<a href="<?=base_url().'Admin/statusProduk/'.$row->category_id.'/0'?>" class="label label-info">Aktif</a>
							<?php }else{ ?>
								<a href="<?=base_url().'Admin/statusProduk/'.$row->category_id.'/1'?>"class="label label-danger">Nonaktif</a>
							<?php }?>
						</td>
						<td class="text-center" style="width: 30%;">
							<a href="<?=base_url().'Admin/detailProduk/'.$row->product_id?>"  class="btn btn-default btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-loading-text="Loading..."  data-original-title="Detail <?=$row->product_name?>" ><i class="fa fa-eye faa-vertical"></i></a>

							<a href="<?=base_url().'Admin/updateProduk/'.$row->product_id?>" class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit <?=$row->product_name?>"><i class="fa fa-edit faa-vertical"></i></button>							
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
	init.push(function () {
		$('.datatables').dataTable();
		$('#datatables_wrapper .table-caption').text('Data Produk');
		$('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
</script>
