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
