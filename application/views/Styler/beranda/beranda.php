<div class="container">
  <div class="row">
    <div class="col-md-3">
      <aside class="sidebar">
        <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="1s">
          <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>KATEGORI</h3>
          <div class="block_content">
            <ul class="list-categories list list-links">
            <?php $where  = array(
                'sub_category' => 0,
                'is_active' => 1 
              );
              $menuCategory = $this->M__db->get_cek_limit('category__','category_id, category_name',$where,9)->result();
              foreach ($menuCategory as $key) { ?>
                <li class="list-categories__item"> <a class="list-sidebar__link" href="<?=base_url().'Category/'.paramEncrypt($key->category_id)?>"> <span class="list-categories__name"><?=strtoupper($key->category_name)?></span> </a> </li>
              <?php }
              ?>
            </ul>
          </div>
        </section>
      </aside>
    </div>
    <div class="col-md-9">
      <script type="text/javascript" src="<?=path_members()?>/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
      <div id="sliderpro3" class="slider-pro main-slider">
        <div class="sp-slides">
          <div class="sp-slide">
            <img class="sp-image" src="<?=base_url()?>assets/media/main-slider/d.png" data-src="<?=base_url()?>assets/media/main-slider/d.png" data-retina="<?=path_members()?>/media/main-slider/d.png" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="605" data-vertical="25" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?=base_url()?>assets/media/main-slider/d1.png"  alt="slide element"/></div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="635" data-vertical="95" data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?=base_url()?>assets/media/main-slider/d2.png"   alt="slide element"/></div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="25"	data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?=base_url()?>assets/media/main-slider/d3.png"   alt="slide element"/></a></div>
          </div>
          <div class="sp-slide">
            <img class="sp-image" src="<?=base_url()?>assets/media/main-slider/z.png" data-src="<?=base_url()?>assets/media/main-slider/z.png" data-retina="<?=path_members()?>/media/main-slider/z.png" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="205px" data-vertical="25" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?=base_url()?>assets/media/main-slider/z1.png"  alt="slide element"/></div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="270" data-vertical="135" data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?=base_url()?>assets/media/main-slider/z2.png"   alt="slide element"/></div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="-10" data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?=base_url()?>assets/media/main-slider/z3.png"   alt="slide element"/></a></div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="section-area">
        <div class="isotope-frame wow bounceInRight" data-wow-duration="1s">
          <ul class="isotope-filter products clearfix">
            <?php foreach ($allData->result() as $row) { ?>
              
              <li class="isotope-item best products__item">
                <?php $rows_images = explode(",",$row->images_product); 
						      $kategori = $this->db->where('category_id', $row->category_id)->get('category__')->row_array();
                ?>
                <a class="products__foto" href="<?=base_url().'assets/uploads/product/'.$rows_images[0]?>" rel="prettyPhoto">
                <img src="<?=base_url().'assets/uploads/product/'.$rows_images[0]?>" height="80%" width="80%" alt="<?=$row->product_name;?>"> </a>
                <h4 class="products__name"><a href="<?=base_url().'detailProduct/'.paramEncrypt($row->product_id);?>"><?=$row->product_name?></a></h4>
                <div class="products__category"><a href="#"><?=$kategori['category_name']?></a></div>
                <div class="products__inner clearfix">
                  <span class="products__price-new"><?=currency($row->price)?></span></span>
              </div>
              <footer class="products-btns clearfix">
                <a href="<?=base_url().'detailProduct/'.paramEncrypt($row->product_id);?>" class="btn btn-default btn-sm btn-block"><i class="icon fa fa-shopping-cart color_danger" aria-hidden="true"></i> Beli</a>
              </footer>
              </li>
            <?php }?>
            
          </ul>
        </div>
      </div>
      <!-- end section-area --> 
    </div>
    <!-- end col --> 
  </div>
  <!-- end row --> 
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="section-area section-default">
        <div class="subscribe subscribe_mod-a"><i class="subscribe__icon fa fa-shopping-cart"></i>
          <div class="subscribe__inner"> <span class="subscribe__title">Cek Pesanan Anda</span> <span class="subscribe__description">Silakhan masukan kode transaksi anda</span> </div>
          <form class="subscribe__form form-inline">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Kode Transaksi">
              <input class="ui-btn ui-btn_default" type="submit" value="Cek Pesanan">
            </div>
          </form>
        </div>
      </div>
      <!-- end section-area --> 
    </div>
    <!-- end col --> 
  </div>
  <!-- end row --> 
</div>

<div class="section-area section-social-links bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <span class="social-links__title">Temukan kami juga</span>
        <ul class="social-links list-unstyled">
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-instagram"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-pinterest-p"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-rss"></i></a> </li>
          <li class="social-links__item"><a class="social-links__link" href="javascript:void(0);"><i class="icon fa fa-youtube-play"></i></a> </li>
        </ul>
      </div>
      <!-- end col --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</div>