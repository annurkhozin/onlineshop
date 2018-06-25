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
					<td></td>
				</tr>
				<tr>
					<th>Favicon</th>
					<td></td>
				</tr>
				<tr>
					<th>Background Login</th>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- Modal -->
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
					<label class="col-sm-3 control-label"><strong>Provinsi <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<select class="form-control" name="propinsi" id="propinsi_asal">
							<option value="" selected="" disabled="">Pilih Provinsi</option>
							<?php $this->load->view('rajaongkir/Province.php',$prop); ?>
						</select>
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Kota / Kab <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
						<select class="form-control" name="kabupaten" id="origin">
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
					<label class="col-sm-3 control-label"><strong>Logo App :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="logo_app" class="upload-file" name="logo_app" autocomplete="off" accept="image/*">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Faicon App :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="favicon_app" class="upload-file" name="favicon_app" autocomplete="off" accept="image/*">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Background Login :</strong></label>
					<div class="col-sm-8">
						<input type="file" id="bg_login" class="upload-file" name="bg_login" autocomplete="off" accept="image/*">
					</div>
				</div>
				<div class="rows form-group">
					<label class="col-sm-3 control-label"><strong>Deskripsi App <font color="red">*</font> :</strong></label>
					<div class="col-sm-8">
					<textarea class="form-control summernote" name="deskripsi_app" id="deskripsi_app" rows="10"><?=$rows['deskripsi_app']?></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div> 
	</div>
</div>
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