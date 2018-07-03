<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-12">
<div class="modal fade modalUpdate" tabindex="-1" role="dialog" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Update Produk</h4>
			</div>
			<div class="modal-body">
			<form action="<?=base_url()?>Admin/saveProduct" class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="row form-group">
					<label class="col-sm-2 control-label">Nama Produk <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<input type="text" name="product_name" class="form-control" placeholder="Nama produk" autocomplete="off" value="<?=$rows['product_name']?>">
						<input type="hidden" name="product_id" value="<?=$rows['product_id']?>">
						<input type="hidden" name="images_old" value="<?=$rows['images_product']?>">
						<input type="hidden" name="action" value="update">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Harga <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<input type="number" name="price" class="form-control" placeholder="Harga produk" autocomplete="off" value="<?=$rows['price']?>">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Berat (gram) <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<input type="number" name="weight" class="form-control" placeholder="Berat produk (gram)" autocomplete="off" value="<?=$rows['weight']?>">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Stok <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<input type="number" name="stock" class="form-control" placeholder="Stok produk" autocomplete="off" value="<?=$rows['stock']?>">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Kategori <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<?php $category = $this->M__db->get_select('category__','category_id,category_name')->result();?>
						<select name="category_id" class="form-control">
							<?php foreach ($category as $key) { ?>
								<option value="<?=$key->category_id;?>" <?=select($key->category_id, $rows['category_id'])?>><?=$key->category_name;?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Gambar Produk :</label>
					<div class="col-sm-7">
						<input type="file" name="images[]" class="form-control upload-file" autocomplete="off"  accept="image/*">
					</div>
					<div class="col-sm-1">
						<span onclick="addImages()" class="btn btn-success faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan Gambar Baru"><i class="fa fa-plus faa-vertical"></i></span>
					</div>
				</div>
				<div id="add"></div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">Informasi <font color="red">*</font> :</label>
					<div class="col-sm-9">
						<textarea class="form-control summernote" name="information"><?=$rows['information']?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-2 control-label">&nbsp;</label>
					<div class="col-sm-9">
							<font color="red">*</font> : Wajib diisi 
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan <?=$title?> Baru"><i class="fa fa-edit faa-vertical"></i> Simpan</button>
			</div>
			</form>			
		</div>
	</div> 
</div>

<div class="panel">
	<div class="panel-heading">
		<span class="panel-title" >Data Product <button class="btn btn-success btn-sm btn-outline faa-parent animated-hover" data-toggle="modal" data-target=".modalUpdate" data-placement="top" title="" data-loading-text="Loading..."><i class="fa fa-edit faa-vertical"></i></button></span>
		<div class="panel-heading-controls">
			<a href="<?=base_url()?>Admin/Product" class="btn btn-xs btn-default btn-outline faa-parent animated-hover"><span class="fa fa-arrow-left faa-horizontal"></span>&nbsp;&nbsp;Kembali</a>
			<button class="btn btn-xs btn-success btn-sm btn-outline faa-parent animated-hover" data-toggle="modal" data-target=".modalUpdate" data-placement="top" title="" data-loading-text="Loading..."><i class="fa fa-edit faa-vertical"></i> Edit data</button>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th width="20%">Nama Product</th>
					<td><?=$rows['product_name']?></td>
				</tr>
				<tr>
					<th>Harga</th>
					<td><?=currency($rows['price'])?></td>
				</tr>
				<tr>
					<th>Berat</th>
					<td><?=$rows['weight']?> gram</td>
				</tr>
				<tr>
					<th>Stok</th>
					<td><?=$rows['stock']?></td>
				</tr>
				<tr>
					<th>Kategori</th>
					<td><?php $kategori = $this->db->where('category_id', $rows['category_id'])->get('category__')->row_array(); echo $kategori['category_name']?></td>
				</tr>
				<tr>
					<th>Gambar Produk</th>
					<td>
					<?php $images = explode(',',$rows['images_product']); $noId=0;
						if($images[0]!=null){
							foreach ($images as $key) { ?>
						<button type="button" class="btn btn-default faa-parent animated-hover"  data-toggle="modal" data-target=".<?='images_'.$noId?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Gambar Produk"><i class="fa fa-picture-o faa-vertical"></i></button>
						<div class="modal fade <?='images_'.$noId?>" tabindex="-1" role="dialog" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title text-center"><?=$key?></h4>
									</div>
									<div class="modal-body text-center">
										<img src="<?=base_url()?>assets/uploads/product/<?=$key?>" width="80%">
									</div>
									<div class="modal-footer text-center">
										<button type="button" class="btn btn-outline btn-default" data-dismiss="modal">Close</button>
										<a href="<?=base_url().'Admin/imagesProduct/'.$rows['product_id'].'/'.$key?>" onclick="return confirm('Anda yakin ingin hapus gambar ini');" class="btn btn-danger faa-parent animated-hover"><span class="fa fa-trash-o faa-vertical"></span> Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<?php $noId++; } }?>
					</td>
				</tr>
				<tr>
					<th>Informasi</th>
					<td><?=$rows['information']?></td>
				</tr>
				<tr>
					<th>Dibuat oleh</th>
					<td><?php $createdBy = $this->db->where('user_id', $rows['created_by'])->get('users__')->row_array(); echo $createdBy['fullname']?></td>
				</tr>
				<tr>
					<th>Terakhir merubah</th>
					<td><?php $modifiedBy = $this->db->where('user_id', $rows['modified_by'])->get('users__')->row_array(); echo $modifiedBy['fullname']?></td>
				</tr>
				<tr>
					<th>Tanggal post</th>
					<td><?=date_format(date_create($rows['created_date']),"d M Y H:i:s")?></td>
				</tr>
				<tr>
					<th>Perubahan terakhir</th>
					<td><?=date_format(date_create($rows['modified_date']),"d M Y H:i:s")?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="panel-footer">
		<div class="text-center">Keterangan : 
			<button class="btn btn-success btn-sm btn-outline faa-parent animated-hover"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="fa fa-edit faa-vertical"></i> Edit Data</button>
		</div>
	</div>
</div>
</div>
<script>
function addImages() {
    $('#add').append('<div class="row form-group"><label class="col-sm-2 control-label"></label><div class="col-sm-7"><input type="file" name="images[]" class="form-control upload-file" autocomplete="off"  accept="image/*"></div></div>');
	$('.upload-file').pixelFileInput({ placeholder: 'No file selected...' });
}
</script>