<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function path_members(){
		echo base_url()."assets/Styler";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
<title><?=$title.' | '.$info['title_app']?></title>
	<link rel="icon" type="image/png" href="<?=base_url().'assets/images/'.$info['favicon_app']?>">
<link href="<?=path_members()?>/css/master.css" rel="stylesheet">
<script src="<?=path_members()?>/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="<?=base_url()?>assets/growl/js/jquery.growl.js" type="text/javascript"></script>
<link href="<?=base_url()?>assets/growl/css/jquery.growl.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->
<div class="layout-theme animated-css "  data-header="sticky" data-header-top="200"  > 
<?php if($error=$this->session->flashdata('error')){ ?>
    <script>
      $.growl.error({ message: '<?=$error?>' });
    </script>
    <?php }
    if($success=$this->session->flashdata('success')){ ?>
    <script>
      $.growl.notice({ message: '<?=$success?>' });
    </script>
    <?php }
    if($warning=$this->session->flashdata('warning')){?>
    <script>
      $.growl.warning({ message: '<?=$warning?>' });
    </script>
    <?php }?>
  <div id="wrapper">
    <header class="header">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="top-header__links list-unstyled">
                <?php if((!$this->session->userdata('session_user')) or ($this->session->userdata('level_user')!=0)){ ?>
                <li class="top-header__link"><a href="<?=base_url()?>Register"><i class="fa fa-sign-in"></i> MASUK</a></li>
                <li class="top-header__link"><a href="<?=base_url()?>Register"><i class="fa fa-user-plus"></i> DAFTAR</a></li>
                <?php }else{ ?>
                  <li class="top-header__link"><a href="<?=base_url()?>Register"><i class="fa fa-user"></i> AKUN</a></li>
                <?php } ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end top-header -->
      
      <div class="container">
        <div class="header-inner">
          <div class="row">
            <div class="col-sm-3 col-xs-12"> <a href="index.html" class="logo"> <img class="logo__img" src="<?=base_url().'assets/images/'.$info['logo_app'];?>" width="20%" alt="Logo"> </a> </div>
            <div class="col-sm-6 col-xs-12">
              <div class="header-search clearfix">
                <div class="header-search__filter">
                  <div class="jelect">
                    <div role="button" class="jelect-current">Filter By</div>
                    <ul class="jelect-options">
                      <li class="jelect-option">Nama</li>
                      <li class="jelect-option">Kategori</li>
                    </ul>
                  </div>
                </div>
                <div class="header-search__form">
                  <form class="product-search">
                    <input class="product-search__field" id="searchQuery" type="search">
                    <button class="product-search__btn ui-btn ui-btn_primary">CARI</button>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="col-sm-3 col-xs-12">
              <div class="header-cart">
                <div class="header-cart__preview"> <span class="icon fa fa-shopping-cart color_primary" aria-hidden="true"></span> <span class="header-cart__inner"> <span class="header-cart__qty">keranjang: <span class="color_primary">(10)</span></span> <span class="header-cart__amount">TOTAL: <span class="color_primary">90.000</span></span> </span> <i class="caret"></i> </div>
                <div class="header-cart__product">
                  <h3 class="header-cart__title">Keranjang Belanja</h3>
                  <ul class="product-list list-unstyled">
                    <li class="product-list__item clearfix"> <a class="product-list__img" href="javascript:void(0);"><img class="img-responsive" src="<?=path_members()?>/media/cart-details/1.jpg" alt="Product"></a>
                      <div class="product-list__inner">
                        <h4 class="product-list__name"><a class="product-list__link" href="javascript:void(0);"><span class="product-list__model">Elekta 50” LED </span>3D TV</a></h4>
                        <span class="product-list__price">9000</span> </div>
                      <i class="product-list__del icon icon-trash color_primary"></i> </li>
                  </ul>
                  <div class="product-list__total">Subtotal:<span class="product-list__total_price">90.000</span></div>
                  <div class="header-cart__buttons clearfix"> <a class="ui-btn ui-btn_default" href="javascript:void(0);">View Cart</a> <a class="ui-btn ui-btn_primary" href="javascript:void(0);">Checkout</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </header>
    
    <div class="top-nav ">
      <div class="container">
        <div class="row">
          <div class="col-md-12  col-xs-12">
            <div class="navbar yamm">
              <div class="navbar-header hidden-md  hidden-lg  hidden-sm">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="javascript:void(0);" class="navbar-brand">Menu</a>
              </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0);">Beranda</a></li>
                  <li> <a href="about.html"> Tentang Kami</a> </li>
                  <li> <a href="contact.html">Kontak</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($content){
				include $content;
			} 
		?>
    <footer class="footer footer_mod-a wow bounceInUp" data-wow-duration="2s">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3"> <img src="<?=base_url().'assets/images/'.$info['logo_app'];?>" width="20%" alt="Logo">
              <div class="footer-info">
                <label><?=$info['name_app']?></label>
                <p><?=$info['deskripsi_app']?></p>
              </div>
            </div>
            <div class="col-md-2">
              <h3 class="footer-title">INFORMATION</h3>
              <ul class="footer-list">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="copyright">Copyright &copy; <?=date('Y')?> <a class="color_primary" href="javascript:void(0);"><?=$info['name_app']?> </a><span class="br">All Rights Reserved.</span></div>
            </div>
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </div>
      <!-- end footer-bottom --> 
    </footer>
  </div>
</div>

<!-- SCRIPTS --> 
<script src="<?=path_members()?>/js/jquery-migrate-1.2.1.js"></script>
<script src="<?=path_members()?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=path_members()?>/js/modernizr.custom.js"></script>
<script src="<?=path_members()?>/plugins/isotope/jquery.isotope.min.js"></script> 
<script src="<?=path_members()?>/plugins/owl-carousel/owl.carousel.min.js"></script> 
<script src="<?=path_members()?>/js/waypoints.min.js"></script> 
<script src="<?=path_members()?>/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
<script src="<?=path_members()?>/plugins/jelect/jquery.jelect.js"></script> 
<script src="<?=path_members()?>/plugins/nouislider/jquery.nouislider.all.min.js"></script> 

<!--Color Switcher--> 
 <script src="<?=path_members()?>/plugins/switcher/js/bootstrap-select.js"></script> 
 <script src="<?=path_members()?>/plugins/switcher/js/dmss.js"></script> 

<!--THEME--> 
<script src="<?=path_members()?>/js/cssua.min.js"></script> 
<script src="<?=path_members()?>/js/wow.min.js"></script> 
<script src="<?=path_members()?>/js/custom.js"></script>
</body>
</html>
