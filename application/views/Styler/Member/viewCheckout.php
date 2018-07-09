
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-area section-default">
        <h3>Data Penerima</h3>
        <table class="table">
          <tbody>
            <tr>
              <td><?=$akun['fullname']?></td>
              <td>Plih Ekpedisi Pengiriman</td>
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
              <th>Nama Produ</th>
              <th>gambar</th>
              <th>Jumlah Barang</th>
              <th>Harga/item</th>
              <th>Sub Total</th>
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
              <td><?=currency($items['price']) ?></td>
              <td><?=currency($items['subtotal']); ?></td>
            </tr>
            <?php $no++; endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4" style="text-align:right;">&nbsp;</th>
              <th style="text-align:center;">Total Harga Barang</th>
              <th><?=currency($this->cart->total()); ?></th>
            </tr>
          </tfoot>
        </table>
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
                <script>
                    function tampil_data(act){
                        var w = '<?php echo $akun['city_id']?>';
                        var x = '<?php echo $akun['city_id']?>';
                        var y = '<?php echo array_sum($berat)?>';
                        var z = $('#courier').val();

                        $.ajax({
                            url: "<?php echo site_url('cost') ?>",
                            type: "GET",
                            data : {origin: w, destination: x, berat: y, courier: z},
                            success: function (ajaxData){
                                $("#hasil").html(ajaxData);
                            }
                        });
                    };
                  </script>
                  <div id="hasil"></div>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2" style="text-align:right;">Total Harga Barang</th>
              <td>&nbsp;</th>
              <th><?=currency($this->cart->total()); ?></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- end section-area --> 
    </div>
    <!-- end col --> 
  </div>
  <!-- end row --> 
</div>
<br><br><br><br><br><br><br><br>