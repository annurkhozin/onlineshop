<div class="container">
    <section class="product-card">
    <div class="row">
      <div class="col-sm-5">
        <div class="product-card__slider" id="image-block">
          <div class="slider-product flexslider">
          <ul class="slides">
            <?php $rows_images = explode(",",$row['images_product']);
              for ($a=0; $a < count($rows_images)  ; $a++) { ?>
            <li> <img src="<?=base_url().'assets/uploads/product/'.$rows_images[0]?>" width="350" title="Foto" alt="<?=$row['product_name']?>"></li>
            <?php }?>
          </ul>
        </div>
        <div class="carousel-product flexslider">
        <ul class="slides">
          <?php for ($i=0; $i < count($rows_images)  ; $i++) { ?>
            <li><a href="<?=base_url().'assets/uploads/product/'.$rows_images[$i]?>"  class="prettyPhoto"><img src="<?=base_url().'assets/uploads/product/'.$rows_images[$i]?>" height="100" width="100"  alt="<?=$row['product_name']?>"> </a> </li>
            <?php }?>
        </ul>
      </div>
    </div>
    <!-- end product-card__slider --> 
  </div>
  <div class="col-sm-7">
    <div class="product-card__main">
      <h1 class="product-card__name"><?=$row['product_name']?></h1>
      <div class="product-card__availability"><i class="icon fa fa-check-circle"></i>Tersedia</div>
      <div class="product-card__price"> <span class="product-card__price-new"><?=currency($row['price'])?></span> </div>
      <div class="product-card__description">
        <?=$row['information']?>
      </div>
      <footer class="card-btns">
        <form action="<?=base_url().'masukKeranjang/'.$this->uri->segment(2)?>" method="post">
        <div class="enumerator"> <a class="minus_btn card-btns__btn"><i class="icon fa fa-minus"></i></a>
          <input type="text" name="jumlah" placeholder="1" value='1'>
          <a class="plus_btn card-btns__btn"><i class="icon fa fa-plus"></i></a> </div>
          <button type='submit' class="card-btns__add"><i class="icon fa fa-shopping-cart"></i> Beli</button>
          </form>
      </footer>
      
    </div>
  </div>
</div>
</section>
</div>