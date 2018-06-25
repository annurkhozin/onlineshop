<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-12">
	<div class="panel-heading">
		<span class="panel-title">Data <?=$title?></span>
		<button class="btn btn-success btn-sm btn-outline faa-parent animated-hover" data-toggle="modal" data-target=".tambah"><i class="fa fa-pencil faa-vertical"></i></button>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th width="20%">Nama Toko</th>
					<td><?=$rows['name_app']?></td>
				</tr>
				<tr>
					<th>Deskripsi Toko</th>
					<td><?=$rows['deskripsi_app']?></td>
				</tr>
				<tr>
					<th>Alamat Toko</th>
					<td><?=$rows['address']?></td>
				</tr>
				
				<?php $prop['propinsi']=$rows['province_id'] ?>
                    <?php $prop['kabupaten']=$rows['city_id'] ?>
				<tr>
					<th>Kota</th>
					<td><?php $this->load->view('rajaongkir/NameCity.php',$prop); ?></td>
				</tr>
				<tr>
					<th>Provinsi</th>
					<td><?php $this->load->view('rajaongkir/NameProvince.php',$prop); ?></td>
				</tr>
				<tr>
					<th>Slogan Toko</th>
					<td><?=$rows['title_app']?></td>
				</tr>
				<tr>
					<th>Zona Waktu</th>
					<td><?=$rows['timezone_app']?></td>
				</tr>
				<tr>
					<th>Logo Toko</th>
					<td><button type="button" class="btn btn-default btn-rounded faa-parent animated-hover"  data-toggle="modal" data-target="#logoToko" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Gambar berita"><i class="fa fa-picture-o faa-vertical"></i> Lihat Gambar</button></td>
					<div id="logoToko" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title text-center"><?=$rows['logo_app']?></h4>
								</div>
								<div class="modal-body text-center">
									<img src="<?=base_url()?>assets/images/<?=$rows['logo_app']?>" width="80%">
								</div>
								<div class="modal-footer text-center">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<th>Favicon Toko</th>
					<td><button type="button" class="btn btn-default btn-rounded faa-parent animated-hover"  data-toggle="modal" data-target="#favicon_app" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Gambar berita"><i class="fa fa-picture-o faa-vertical"></i> Lihat Gambar</button></td>
					<div id="favicon_app" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title text-center"><?=$rows['favicon_app']?></h4>
								</div>
								<div class="modal-body text-center">
									<img src="<?=base_url()?>assets/images/<?=$rows['favicon_app']?>" width="80%">
								</div>
								<div class="modal-footer text-center">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<th>Background Login</th>
					<td><button type="button" class="btn btn-default btn-rounded faa-parent animated-hover"  data-toggle="modal" data-target="#bg_login" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Gambar berita"><i class="fa fa-picture-o faa-vertical"></i> Lihat Gambar</button></td>
					<div id="bg_login" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title text-center"><?=$rows['bg_login']?></h4>
								</div>
								<div class="modal-body text-center">
									<img src="<?=base_url()?>assets/images/<?=$rows['bg_login']?>" width="80%">
								</div>
								<div class="modal-footer text-center">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- Modal -->
<form class="form-horizontal" action="<?=base_url()?>Admin/saveShop" id="form" method="post" enctype="multipart/form-data">
<div class="modal fade tambah" tabindex="-1" role="dialog" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Perbaharui <?=$title?></h4>
			</div>
			<div class="modal-body">
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Nama App <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<input type="hidden" name="id_app" value="<?=$rows['id_app']?>">
						<input type="hidden" name="logo_app_old" value="<?=$rows['logo_app']?>">
						<input type="hidden" name="favicon_app_old" value="<?=$rows['favicon_app']?>">
						<input type="hidden" name="bg_login_old" value="<?=$rows['bg_login']?>">
						<input type="text" name="name_app" value="<?=$rows['name_app']?>" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Alamat Toko<font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<textarea class="form-control" name="address"><?=$rows['address']?></textarea>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Provinsi <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<select class="form-control" name="province_id" id="propinsi_asal">
							<option value="" selected="" disabled="">Pilih Provinsi</option>
							<?php $this->load->view('rajaongkir/Province.php',$prop); ?>
						</select>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Kota / Kab <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<select class="form-control" name="city_id" id="origin">
							<option value="">Pilih Kota</option>
						</select>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Title App <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<input type="text" name="title_app" value="<?=$rows['title_app']?>" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Lokasi Server <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<input type="text" name="timezone_app" value="<?=$rows['timezone_app']?>" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Logo App :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="logo_app" class="upload-file" name="logo_app" autocomplete="off" accept="image/*">
						<input type="hidden" name="logo_old" value="<?=$rows['logo_app']?>">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Faicon App :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="favicon_app" class="upload-file" name="favicon_app" autocomplete="off" accept="image/*">
						<input type="hidden" name="favicon_old" value="<?=$rows['favicon_app']?>">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Background Login :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="bg_login" class="upload-file" name="bg_login" autocomplete="off" accept="image/*">
						<input type="hidden" name="bg_login_old" value="<?=$rows['bg_login']?>">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Deskripsi App <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
					<textarea class="form-control summernote" name="deskripsi_app" id="deskripsi_app" rows="3"><?=$rows['deskripsi_app']?></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success btn-rounded faa-parent animated-hover" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simpan Tags Baru" onclick="btnsave()"><i class="fa fa-check faa-vertical"></i> Simpan</button>
			</div>
		</div> 
	</div>
</div>
</form>
<script type="text/javascript">
init.push(function () {
    $(document).ready(function(){
        var kabupaten='<?php echo $rows['city_id'] ?>';
        var propinsi=$('#propinsi_asal').val();
        $.ajax({
            url:"<?php echo base_url('getcityfirst')?>",
            type:"POST",
            cache:false,
            data:{"propinsi":propinsi,"kabupaten":kabupaten},
            success:function(data){
                 $('#origin').html(data);
            }
        });
        $("#propinsi_asal").change(function(){
         var propinsi=$('#propinsi_asal').val();
            $.ajax({
                url:"<?php echo base_url('getcity')?>",
                type:"POST",
                cache:false,
                data:"propinsi="+propinsi,
                success:function(data){
                     $('#origin').html(data);
                }
            });
                
        });
    });
    });
</script>