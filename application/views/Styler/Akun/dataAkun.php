<div class="border-main">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <section class="section-area">
          <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-user"></i>Data Akun</h2>
          <form class="form-contact ui-form" action="<?=base_url()?>saveDataMember" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-12">
                  <input class="form-control" name="fullname" type="text" placeholder="Nama Lengkap" value="<?=$akun['fullname']?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <input class="form-control" name="username" type="text" placeholder="Username" value="<?=paramDecrypt($akun['username'])?>" readonly required>
                </div>
                <div class="col-md-6">
                  <input class="form-control" name="email" type="text" placeholder="Email" value="<?=$akun['email']?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <input class="form-control" name="birthday" type="date" placeholder="birthday" value="<?=$akun['birthday']?>" required>
                </div>
                <div class="col-md-6">
                  <label>Photo</label>
                  <input type="file" name="photo">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <input class="form-control" name="phone" type="text" placeholder="No Telp / HP" value="<?=$akun['phone']?>" required>
                  <input name="photo_old" type="hidden" value="<?=$akun['photo']?>">
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="gender" required>
                    <option value="<?=$akun['gender']?>"><?php if($akun['gender']==1){ echo 'Laki laki';}else{ echo'Perempuan';}?></option>
                    <option value="1">Laki laki</option>
                    <option value="0">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
        </section>
      </div>
      
      <div class="col-md-6">
        <section class="section-area section-contacts">
          <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-map-marker"></i>Alamat Anda</h2>
            <div class="row form-contact ui-form">
              <div class="col-md-12">
                <div class="col-md-12">
                  <input class="form-control" name="address_name" type="text" placeholder="Nama Alamat" required value="<?=$akun['address_name']?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <select class="form-control" required name="province_id" id="propinsi_asal">
                      <option value="" selected="" disabled="">Pilih Provinsi</option>
                      <?php $this->load->view('rajaongkir/getProvince'); ?>
                    </select>
                </div>
                <div class="col-md-6">
                  <select class="form-control" required name="city_id" id="origin">
                    <option value="" selected="" disabled="">Pilih Kota</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12">
                  <textarea class="form-control" name="address" type="text" placeholder="Alamat Anda" rows="9" required><?=$akun['address']?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                </div>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){

        $("#propinsi_asal").change(function(){
         var propinsi=$('#propinsi_asal').val();
            $.ajax({
                url:"<?php echo site_url('getcity')?>",
                type:"POST",
                cache:false,
                data:"propinsi="+propinsi,
                success:function(data){
                     $('#origin').html(data);
                }
            });
                
        });
    });
</script>