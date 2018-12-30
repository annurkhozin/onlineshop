<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-area section-default">
        <h3>Data Penerima</h3>
        <table class="table">
          <tbody>
            <tr>
              <td><?=$akun['fullname']?></td>
            </tr>
            <tr>
              <td><?=$akun['email'].' , Telp. '.$akun['phone']?></td>
            </tr>
            <tr>
              <td><?=$akun['address_name']?></td>
            </tr>
            <tr>
              <td><?='Alamat : '.$akun['address']?></td>
            </tr>
            <tr>
              <td><?php $address = $this->M__db->getcity($akun['city_id'],$akun['province_id']); echo 'Kota '.$address['city_name'].' - '.$address['postal_code'].' - '.$address['province']?></td>
            </tr>
          </tbody>
        </table>
        <h3> Data Barang</h3>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>gambar</th>
              <th>Jumlah Barang</th>
              <th style="text-align:center;">Harga/item</th>
              <th style="text-align:center;">Sub Total</th>
            </tr>
          </thead>
          <tbody>
            <?php $jumlah=array(); $berat=array(); $no=1;
              foreach ($this->cart->contents() as $items): 
                  $jumlah[]=$items['price'];
                  $berat[]=$items['weight'];
              ?>
            <tr>
              <td><?=$no;?></td>
              <td><a class="product-list__link" href="<?=base_url().'detailProduct/'.paramEncrypt($items['product_id']);?>"><img src="<?=base_url().'assets/uploads/product/'.$items['picture']?>" alt="Product" width="70px"></a></td>
              <td><a class="product-list__link" href="<?=base_url().'detailProduct/'.paramEncrypt($items['product_id']);?>"><?=$items['name'] ?></a></td>
              <td><?=$items['qty'] ?> items</td>
              <td style="text-align:right;"><?=currency($items['price']) ?></td>
              <td style="text-align:right;"><?=currency($items['subtotal']); ?></td>
            </tr>
            <?php $no++; endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4" style="text-align:right;">&nbsp;</th>
              <th style="text-align:center;">Total Harga Barang</th>
              <th style="text-align:right;"><span style="background-color:#FFEFD5; font-size:16px;"><?=currency($this->cart->total());?></span></th>
            </tr>
          </tfoot>
        </table>
        <?php if($this->cart->contents()){?>
        <h3>Data Pengiriman</h3>
        <table class="table">
          <tbody>
            <tr>
              <td rowspan="5">
                <select required onchange="tampil_data('data')" class="form-control" name="courier" id="courier">
                    <option value="">Pilih Kurir</option>
                    <option value="jne">JNE</option>
                    <option value="pos">POS</option>
                    <option value="tiki">TIKI</option>
                </select>
              </td>
              <td>
                <?php $city = $this->db->select('city_id')->get('system__')->row_array()?>
                <script>
                    function tampil_data(act){
                        var w = '<?php echo $city['city_id']?>';
                        var x = '<?php echo $akun['city_id']?>';
                        var y = '<?php echo array_sum($berat)?>';
                        var z = $('#courier').val();
                        if(z!=''){
                          $.ajax({
                              url: "<?php echo site_url('cost') ?>",
                              type: "GET",
                              data : {origin: w, destination: x, berat: y, courier: z},
                              success: function (ajaxData){
                                document.getElementById("bgtotal").style.backgroundColor = 'yellow';
                                  $("#hasil").html(ajaxData);
                                  $('.kurir').val(z);
                              }
                          });
                        }
                    };
                  </script>
                  <div id="hasil"></div>
              </td>
            </tr>
          </tbody>
          <tfoot >
            <tr>
              <th colspan="2" style="text-align:right;">Biaya pengiriman</th>
              <td>&nbsp;</th>
              <th style="text-align:right;">
                <span class="cost" style="background-color:#ff00ff; font-size:16px;">-</span></th>
            </tr>
            <tr>
              <th colspan="2" style="text-align:right;">Total Pembayaran</th>
              <td>&nbsp;</th>
              <th id="bgtotal" style="text-align:right; font-size:20px;">
                <span class="totalBayarText" style="font-size:20px;"><?=currency($this->cart->total()); ?></span></th>
            </tr>
            <tr>
                    <td colspan="3">&nbsp;</td>
                    <td style="text-align:right;">
                      <input type="hidden" id="member_id" value="<?=$this->session->userdata('session_user')?>">
                      <input type="hidden" id="address_name" value="<?=$akun['address_name']?>">
                      <input type="hidden" id="address" value="<?=$akun['address']?>">
                      <input type="hidden" id="province_id" value="<?=$akun['province_id']?>">
                      <input type="hidden" id="city_id" value="<?=$akun['city_id']?>">
                      <input type="hidden" id="kurir" class="kurir">
                      <input type="hidden" id="service" class="service">
                      <input type="hidden" id="cost" class="cost">
                      <input type="hidden" id="total_price" value="<?=$this->cart->total(); ?>">
                      <input type="hidden" id="payment" class="payment">
                      <input type="hidden" id="weight" class="weight" value="<?=array_sum($berat)?>">
                      <button onclick="prosesPesan()" class="card-btns__add">Proses Pemesanan <i class="icon fa fa-angle-double-right"></i> </button>
                    </td>
            </tr>
          </tfoot>
        </table>
                  <?php }?>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br>
<script>
  function prosesPesan(){
    var member_id = $('#member_id').val();
    var address_name = $('#address_name').val();
    var address = $('#address').val();
    var province_id = $('#province_id').val();
    var city_id = $('#city_id').val();
    var kurir = $('#kurir').val();
    var service = $('#service').val();
    var cost = $('#cost').val();
    var total_price = $('#total_price').val();
    var payment = $('#payment').val();
    var weight = $('#weight').val();
    if( member_id ==''){
			$.growl.warning({ message: 'member_id is required'});
		}else if( address_name ==''){
			$.growl.warning({ message: 'address name is required'});
		}else if( address ==''){
			$.growl.warning({ message: 'address is required'});
		}else if( province_id ==''){
			$.growl.warning({ message: 'province is required'});
		}else if( city_id ==''){
			$.growl.warning({ message: 'city is required'});
		}else if( kurir ==''){
			$.growl.warning({ message: 'kurir is required'});
		}else if( service ==''){
			$.growl.warning({ message: 'service is required'});
		}else if( cost ==''){
			$.growl.warning({ message: 'cost is required'});
		}else if( total_price ==''){
			$.growl.warning({ message: 'total price is required'});
		}else if( payment ==''){
			$.growl.warning({ message: 'payment is required'});
		}else if( weight ==''){
			$.growl.warning({ message: 'weight is required'});
		}else{
      $.ajax({
        type:"POST",
        url:"<?=base_url()?>prosesPesan",
    data:{member_id:member_id,address_name:address_name,address:address,province_id:province_id,city_id:city_id,kurir:kurir,service:service,cost:cost,total_price:total_price,payment:payment,weight:weight},
        cache:false,
        success:function(code){
          if(code==500){
            $.growl.warning({ message: 'Gagal memproses pesanan, Mohon mencoba lagi', duration:5000 });
          }else{
            $.growl.notice({ message: 'Pemesanan behasil, Silahkan melakukan pembayaran', duration:5000 });
            window.location = "<?=base_url()?>transactionCode?v="+code;
            alert('Pemesanan behasil, Silahkan melakukan pembayaran');
          }
        },error: function (status) {
          $.growl.error({ message: status.status+' '+status.statusText, duration:5000 });
          $.growl.warning({ message: 'Refresh this page and try again', duration:5000 });
        }
      });
    }
  }
</script>