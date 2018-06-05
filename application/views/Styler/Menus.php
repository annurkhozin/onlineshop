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
<title>STYLER, Home-3</title>
<link href="favicon.png" type="image/x-icon" rel="shortcut icon">
<link href="<?=path_members()?>/css/master.css" rel="stylesheet">

<!-- SWITCHER -->
<!-- <link href="<?=path_members()?>/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all"> -->
<!-- <link href="<?=path_members()?>/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all"> -->
<link href="<?=path_members()?>/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all">
<!-- <link href="<?=path_members()?>/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all"> -->
<!-- <link href="<?=path_members()?>/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all"> -->
<!-- <link href="<?=path_members()?>/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all"> -->


<script src="<?=path_members()?>/plugins/jquery/jquery-1.11.3.min.js"></script>

</head>

<body>
<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->
<div class="layout-theme animated-css "  data-header="sticky" data-header-top="200"  > 
   
  <div id="wrapper">
    <header class="header">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top-header__select"> <span>Language</span>
                <div class="btn-group">
                  <button type="button" class="btn_select dropdown-toggle" data-toggle="dropdown">English<span class="caret color_primary"></span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0);">English</a></li>
                    <li><a href="javascript:void(0);">Dutch</a></li>
                  </ul>
                </div>
              </div>
              <div class="top-header__select"> <span>Currency</span>
                <div class="btn-group">
                  <button type="button" class="btn_select dropdown-toggle" data-toggle="dropdown">USD<span class="caret color_primary"></span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0);">USD</a></li>
                    <li><a href="javascript:void(0);">EURO</a></li>
                  </ul>
                </div>
              </div>
              <ul class="top-header__links list-unstyled">
                <li class="top-header__link"><a href="javascript:void(0);">MY ACCOUNT</a></li>
                <li class="top-header__link"><a href="javascript:void(0);">WISHLIST</a></li>
                <li class="top-header__link"><a href="javascript:void(0);">CHECKOUT</a></li>
                <li class="top-header__link"><a href="javascript:void(0);">DELIVERY</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end top-header -->
      
      <div class="container">
        <div class="header-inner">
          <div class="row">
            <div class="col-sm-3 col-xs-12"> <a href="index.html" class="logo"> <img class="logo__img" src="<?=path_members()?>/img/logo.png" height="51" width="162" alt="Logo"> </a> </div>
            <div class="col-sm-6 col-xs-12">
              <div class="header-search clearfix">
                <div class="header-search__filter">
                  <div class="jelect">
                    <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                    <div tabindex="0" role="button" class="jelect-current">Filter By</div>
                    <ul class="jelect-options">
                      <li data-val='0' tabindex="0" class="jelect-option jelect-option_state_active">Date</li>
                      <li data-val='1' tabindex="0" class="jelect-option">Title</li>
                      <li data-val='2' tabindex="0" class="jelect-option">CATEGORIES</li>
                    </ul>
                  </div>
                  <!-- end jelect --> 
                </div>
                <div class="header-search__form">
                  <form class="product-search">
                    <input class="product-search__field" id="searchQuery" type="search">
                    <button class="product-search__btn ui-btn ui-btn_primary">SEARCH</button>
                  </form>
                </div>
              </div>
              <!-- end header-search --> 
            </div>
            <!-- end col -->
            
            <div class="col-sm-3 col-xs-12">
              <div class="header-cart">
                <div class="header-cart__preview"> <span class="icon icon-bag color_primary" aria-hidden="true"></span> <span class="header-cart__inner"> <span class="header-cart__qty">CART ITEMS: <span class="color_primary">(4)</span></span> <span class="header-cart__amount">TOTAL: <span class="color_primary">$935.00</span></span> </span> <i class="caret"></i> </div>
                <div class="header-cart__product">
                  <h3 class="header-cart__title">cart details</h3>
                  <ul class="product-list list-unstyled">
                    <li class="product-list__item clearfix"> <a class="product-list__img" href="javascript:void(0);"><img class="img-responsive" src="<?=path_members()?>/media/cart-details/1.jpg" alt="Product"></a>
                      <div class="product-list__inner">
                        <h4 class="product-list__name"><a class="product-list__link" href="javascript:void(0);"><span class="product-list__model">Elekta 50” LED </span>3D TV</a></h4>
                        <span class="product-list__price">$680</span> </div>
                      <i class="product-list__del icon icon-trash color_primary"></i> </li>
                    <li class="product-list__item clearfix"> <a class="product-list__img" href="javascript:void(0);"><img class="img-responsive" src="<?=path_members()?>/media/cart-details/2.jpg" alt="Product"></a>
                      <div class="product-list__inner">
                        <h4 class="product-list__name"><a class="product-list__link" href="javascript:void(0);"><span class="product-list__model">Beats Solo 2.0 </span>Headphones</a></h4>
                        <span class="product-list__price">$310</span> </div>
                      <i class="product-list__del icon icon-trash color_primary"></i> </li>
                  </ul>
                  <div class="product-list__total">Subtotal:<span class="product-list__total_price">$900</span></div>
                  <div class="header-cart__buttons clearfix"> <a class="ui-btn ui-btn_default" href="javascript:void(0);">View Cart</a> <a class="ui-btn ui-btn_primary" href="javascript:void(0);">Checkout</a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row--> 
        </div>
        <!-- end header-inner--> 
      </div>
      <!-- end container--> 
    </header>
    <!-- HEADER END -->
    
    <div class="top-nav ">
      <div class="container">
        <div class="row">
          <div class="col-md-12  col-xs-12">
            <div class="navbar yamm">
              <div class="navbar-header hidden-md  hidden-lg  hidden-sm">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="javascript:void(0);" class="navbar-brand">Menu</a> </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0);">Home</a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="home-1.html"> Home 1</a> </li>
                      <li> <a href="home-2.html"> Home 2</a> </li>
                      <li> <a href="home-3.html"> Home 3</a> </li>
                      <li> <a href="home-4.html"> Home 4</a> </li>
                      <li> <a href="home-5.html"> Home 5</a> </li>
                    </ul>
                  </li>
                  <li class="yamm-fw">
                    <div class="nav-label-wrap"> <span class="nav-label nav-label_primary">new</span> </div>
                    <a href="category-1.html">Shop</a>
                    <div class="dropdown-menu">
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="yamm-mega">
                                  <h3 class="yamm-mega__title ui-title-block">Latest Arrivals</h3>
                                  <ul class="list list-links">
                                    <li><a href="javascript:void(0);">T-Shirts & Apparels</a></li>
                                    <li><a href="javascript:void(0);">Electronics & Gadgets</a></li>
                                    <li><a href="javascript:void(0);">Tools & Outdoors</a></li>
                                    <li><a href="javascript:void(0);">iPods & Music Players</a></li>
                                    <li><a href="javascript:void(0);">Lights & Lasers</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="yamm-mega">
                                  <h3 class="yamm-mega__title ui-title-block">WATCHES</h3>
                                  <ul class="list list-links">
                                    <li><a href="javascript:void(0);">Apple Watches</a></li>
                                    <li><a href="javascript:void(0);">Fashion Watches</a></li>
                                    <li><a href="javascript:void(0);">Casual Watches</a></li>
                                    <li><a href="javascript:void(0);">Smart Watches</a></li>
                                    <li><a href="javascript:void(0);">Kids Watches</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="yamm-mega">
                                  <h3 class="ui-title-block">ACCESSORIES</h3>
                                  <ul class="list list-links">
                                    <li><a href="javascript:void(0);">Bags & Purses</a></li>
                                    <li><a href="javascript:void(0);">Men Belts</a></li>
                                    <li><a href="javascript:void(0);">Women Jewelry</a></li>
                                    <li><a href="javascript:void(0);">Sunglasses</a></li>
                                    <li><a href="javascript:void(0);">Casual Wear Items</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="yamm-banner yamm-banner_mod-1"> <img class="img-responsive" src="<?=path_members()?>/media/banners/3.jpg" height="329" width="415" alt="banner"> </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="yamm-banner yamm-banner_mod-2"> <img class="img-responsive" src="<?=path_members()?>/media/banners/4.jpg" height="329" width="415" alt="banner"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="javascript:void(0);">Category</a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="category-1.html"> Category 1</a> </li>
                      <li> <a href="category-2.html"> Category 2</a> </li>
                      <li> <a href="category-3.html"> Category 3</a> </li>
                      <li> <a href="product-1.html"> Simple Product</a> </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0);">Pages</a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="typografy.html"> Typografy</a> </li>
                      <li> <a href="404.html">404 page</a> </li>
                    </ul>
                  </li>
                  <li><a href="blog-1.html">Blog</a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="blog-1.html"> Blog Page</a> </li>
                      <li> <a href="blog-2.html"> Post page</a> </li>
                    </ul>
                  </li>
                  <li> <a href="about.html"> About Page</a> </li>
                  <li> <a href="contact.html">Contact page</a> </li>
                  <li>
                    <div class="nav-label-wrap"> <span class="nav-label nav-label_second">new</span> </div>
                    <a href="http://themeforest.net/user/templines/portfolio" target="_blank">BUY NOW</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end top-nav -->
    
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <aside class="sidebar">
            <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="2s">
              <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>CATEGORIES</h3>
              <div class="block_content">
                <ul class="list-categories list list-links">
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">T-SHIRTS & APPAREL</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">TOOLS & OUTDOORS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">ELECTRONICS & GADGETS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">LIGHTS & LASERS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">HOODIES & JACKETS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">SMARTPHONE & TABLETS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                  <li class="list-categories__item"> <a class="list-sidebar__link" href="javascript:void(0);"> <span class="list-categories__name">KIDS TOYS</span> <span class="list-categories__amout">(23)</span> </a> </li>
                </ul>
              </div>
            </section>
            <!-- end widget-category -->
            <div class="widget text-center"> <a class="banner wow bounceInLeft" href="javascript:void(0);" data-wow-duration="2s" data-wow-delay=".5s"> <img class="img-responsive" src="<?=path_members()?>/media//banners/2.jpg" height="170" width="270" alt="Banner">
              <div class="banner-border banner-border_brown">
                <div class="banner-border__inner"></div>
              </div>
              </a> </div>
          </aside>
          <!-- end sidebar --> 
        </div>
        <!-- end col -->
        
        <div class="col-md-9">
        
        
            <script type="text/javascript" src="<?=path_members()?>/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
    <div id="sliderpro3" class="slider-pro main-slider">
      <div class="sp-slides">
        <div class="sp-slide"> <img class="sp-image" 
            src="<?=path_members()?>/media/main-slider/d.png"
        	data-src="<?=path_members()?>/media/main-slider/d.png"					
            data-retina="<?=path_members()?>/media/main-slider/d.png" alt="img"/>
          <div class="item-wrap sp-layer  sp-padding" data-horizontal="605" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?=path_members()?>/media/main-slider/d1.png"  alt="slide element"/></div>
 <div class="item-wrap sp-layer  sp-padding" data-horizontal="635" data-vertical="95"
					data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?=path_members()?>/media/main-slider/d2.png"   alt="slide element"/></div>
        <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?=path_members()?>/media/main-slider/d3.png"   alt="slide element"/></a></div>
        </div>
        
        
        <div class="sp-slide"> <img class="sp-image" 
            src="<?=path_members()?>/media/main-slider/z.png"
        	data-src="<?=path_members()?>/media/main-slider/z.png"					
            data-retina="<?=path_members()?>/media/main-slider/z.png" alt="img"/>
          <div class="item-wrap sp-layer  sp-padding" data-horizontal="205px" data-vertical="25"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> <img src="<?=path_members()?>/media/main-slider/z1.png"  alt="slide element"/></div>
 <div class="item-wrap sp-layer  sp-padding" data-horizontal="270" data-vertical="135"
					data-show-transition="left" data-hide-transition="up" data-show-delay="700" data-hide-delay="200"> <img src="<?=path_members()?>/media/main-slider/z2.png"   alt="slide element"/></div>
        <div class="item-wrap sp-layer  sp-padding" data-horizontal="25" data-vertical="-10"
					data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300"> <a href="category-1.html"><img src="<?=path_members()?>/media/main-slider/z3.png"   alt="slide element"/></a></div>
        </div>
        
        
        
      </div>
    </div>
        

          
          <!-- end main-slider -->
          
          <ul class="category-images cat-img-2">
            <li class="grid"> 
              <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"> <img class="img-responsive" src="<?=path_members()?>/media/420x170/1.jpg" height="170" width="420" alt="Foto">
                <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">FASHION COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
              </figure>
            </li>
            <li class="grid left-space right-space">
              <figure class="effect-bubba wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> <img class="img-responsive" src="<?=path_members()?>/media/420x170/2.jpg" height="170" width="420" alt="Foto">
                <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">PERFUMES COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
              </figure>
            </li>
            
          </ul>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area section-advantages no-top-padding">
            <ul class="list-advantages list-advantages_mod-a list-unstyled wow bounceInUp" data-wow-duration="2s">
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-diamond"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Special Offers</span> <span class="list-advantages__description">Shop Big Save Big</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-basket-loaded"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Free Delivery</span> <span class="list-advantages__description">On Orders Above $99</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-like"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">30 Days Return</span> <span class="list-advantages__description">Policy We offers</span> </div>
                </a> </li>
              <li class="list-advantages__item"> <a class="list-advantages__link" href="javascript:void(0);"> <span class="list-advantages__icon helper"><i class="icon icon-rocket"></i></span>
                <div class="list-advantages__inner"> <span class="list-advantages__name">Fastest Shipping</span> <span class="list-advantages__description">2 Days Express</span> </div>
                </a> </li>
            </ul>
            <!-- end list-advantages --> 
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <ul id="filter" class="clearfix wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
              <li><a href="" data-filter="*" class="current">ALL PRODUCTS</a></li>
              <li><a href="" data-filter=".best">BEST SELLERS</a></li>
              <li><a href="" data-filter=".newest">NEWEST ADDED</a></li>
            </ul>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <div class="isotope-frame wow bounceInRight" data-wow-duration="2s">
              <ul class="isotope-filter products clearfix">
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/1.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/1.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Montblanc Meisterstück</a></h4>
                  <div class="products__category"><a href="#">WATCHES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$4500</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item newest products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/2.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/2.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                  <div class="products__category"><a href="#">SMARTPHONES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/3.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                  <div class="products__category"><a href="#">PERFUMES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                <li class="isotope-item newest products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/4.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                  <div class="products__category"><a href="#">HEADPHONES</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                  <div class="products__category"><a href="#">LAPTOPS</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/10.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/10.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Eye Shadow Makeup Kit</a></h4>
                  <div class="products__category"><a href="#">MAKEUP</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$80</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item best products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/5.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">MP3 Active 2 Neon Blue 4GB</a></h4>
                  <div class="products__category"><a href="#">Music Players</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                <li class="isotope-item hot products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                  <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                  <div class="products__category"><a href="#">LED TV’s</a></div>
                  <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                    <ul class="rating">
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star"></i></li>
                      <li><i class="icon fa fa-star disabled"></i></li>
                    </ul>
                  </div>
                  <footer class="products-btns clearfix">
                    <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                    <span class="products-btns__other pull-right">
                    <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                    <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                    </span> </footer>
                  <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
              </ul>
            </div>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area section-banner">
            <div class="banner banner_w-btn wow bounceInUp" data-wow-duration="2s"> <img class="img-responsive" src="<?=path_members()?>/media/banners/5.jpg" height="200" width="1170" alt="Banner">
              <div class="banner__inner">
                <div class="banner__title">Mega Makeup Sale</div>
                <span class="banner__info">UPTO 35% OFF</span> <a class="banner__btn ui-btn ui-btn_primary" href="javascript:void(0);">SHOP NOW</a> </div>
            </div>
          </div>
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <aside class="sidebar">
              <section class="widget widget-slider widget_first wow bounceInLeft" data-wow-duration="2s">
                <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>DEALS OF THE WEEK</h3>
                <div class="block_content">
                  <div class="products products_slider owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel" id="sidebar-slider"
												data-min480="2"
												data-min768="3"
												data-min992="1"
												data-min1200="1"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="400000"
												data-stop-on-hover="true">
                    <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                    <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/260x305/1.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/260x305/1.jpg" height="305" width="260" alt="Goods"> </a>
                      <h4 class="products__name"><a href="#">Apple iPhone 6 Plus 64GB LTE Smartphone Silver</a></h4>
                      <div class="products__category"><a href="#">SMARTPHONE</a></div>
                      <div class="products__inner clearfix"> <span class="products__price-new">$499</span> <span class="products__price-old">$689.00</span>
                        <ul class="rating">
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star"></i></li>
                          <li><i class="icon fa fa-star disabled"></i></li>
                        </ul>
                      </div>
                      <footer class="products-counter"> <i class="icon icon-clock color_primary"></i> ENDS IN <span class="products-counter__inner"> <span class="products-counter__item">12 <span class="color_primary">D</span></span> <span class="products-counter__item">16 <span class="color_primary">H</span></span> <span class="products-counter__item">60 <span class="color_primary">M</span></span> </span> </footer>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end widget-slider -->
              
              <div class="widget text-center"> <a class="banner wow bounceInLeft" data-wow-duration="2s" href="javascript:void(0);"> <img class="img-responsive" src="<?=path_members()?>/media/banners/1.jpg" height="585" width="270" alt="Banner">
                <div class="banner-border banner-border_yellow">
                  <div class="banner-border__inner"></div>
                </div>
                <div class="label-wrap"><span class="label label-danger">NEW</span></div>
                </a> </div>
              <!-- end widget -->
              
              <section class="widget widget-cloud clearfix wow bounceInLeft" data-wow-duration="2s">
                <h3 class="widget-title ui-title-block"><i class="icon fa fa-bars"></i>TAGS</h3>
                <div class="block_content">
                  <div class="tagcloud">
                    <ul class="wp-tag-cloud list-unstyled">
                      <li><a href="/">Shoes For Her</a></li>
                      <li><a href="/">Perfumes</a></li>
                      <li><a href="/">Stuff</a></li>
                      <li><a href="/">Tablets</a></li>
                      <li><a href="/">Smartphones</a></li>
                      <li><a href="/">Office</a></li>
                      <li><a href="/">iPad</a></li>
                      <li><a href="/">Apple</a></li>
                      <li><a href="/">Home Appliances</a></li>
                      <li><a href="/">Outdoor</a></li>
                      <li><a href="/">Brand Watches</a></li>
                    </ul>
                  </div>
                </div>
              </section>
              <!-- end widget-cloud --> 
            </aside>
            <!-- end sidebar --> 
          </div>
          <!-- end col -->
          
          <div class="col-md-9">
            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>SPECIAL PRODUCTS</h3>
              <div class="wrap-slider">
                <ul class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
												data-min480="2"
												data-min768="3"
												data-min992="3"
												data-min1200="3"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="4000"
												data-stop-on-hover="true">
                  <li class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/2.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                    <div class="products__category"><a href="#">SMARTPHONES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                  </li>
                  <li class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                  <li class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                    <div class="products__category"><a href="#">HEADPHONES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                  </li>
                  <li class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                </ul>
                <!-- end products --> 
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area -->
            
            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>HOT DEALS</h3>
              <div class="wrap-slider">
                <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
												data-min480="2"
												data-min768="3"
												data-min992="3"
												data-min1200="3"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="400000"
												data-stop-on-hover="true">
                  <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                    <div class="products__category"><a href="#">PERFUMES</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                    <div class="products__category"><a href="#">LAPTOPS</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                    <div class="products__category"><a href="#">LED TV’s</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                  <div class="products__item"> <a class="products__foto" href="<?=path_members()?>/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?=path_members()?>/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                    <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                    <div class="products__category"><a href="#">LAPTOPS</a></div>
                    <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                      <ul class="rating">
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star"></i></li>
                        <li><i class="icon fa fa-star disabled"></i></li>
                      </ul>
                    </div>
                    <footer class="products-btns clearfix">
                      <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                      <span class="products-btns__other pull-right">
                      <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                      <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                      </span> </footer>
                    <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                </div>
                <!-- end products --> 
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area -->
            
            <section class="section-area section-list-posts wow bounceInRight" data-wow-duration="2s">
              <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>LATEST BLOG POSTS</h3>
              <div class="wrap-slider">
                
                <div class="list-posts_mod-a list-posts_carusel list-unstyled owl-carousel owl-theme_mod-b owl-theme enable-owl-carousel"
													data-min480="1"
													data-min768="2"
													data-min992="2"
													data-min1200="2"
													data-pagination="false"
													data-navigation="true"
													data-auto-play="4000"
													data-stop-on-hover="true">
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?=path_members()?>/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date"> June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?=path_members()?>/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?=path_members()?>/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                  <article class="list-posts__article clearfix">
                    <div class="img-hover-effect"><img class="img-responsive" src="<?=path_members()?>/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                </div>
                
              </div>
              <!-- end wrap-slider --> 
            </section>
            <!-- end section-area --> 
            
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end border-main -->
    
    <div class="section-area section-default section-list-clients wow bounceInUp" data-wow-duration="2s">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="list-clients list-unstyled owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel"
									data-min480="2"
									data-min768="4"
									data-min992="4"
									data-min1200="5"
									data-pagination="false"
									data-navigation="true"
									data-auto-play="4000"
									data-stop-on-hover="true">
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/1.png" height="80" width="136" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/2.png" height="80" width="146" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/3.png" height="80" width="98" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/4.png" height="80" width="171" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/5.png" height="80" width="100" alt="Clients"> </div>
              <div class="list-clients__item"> <img class="img-responsive" src="<?=path_members()?>/media/clients/3.png" height="80" width="98" alt="Clients"> </div>
            </div>
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end section-area -->
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area section-default">
            <div class="subscribe subscribe_mod-a"> <i class="subscribe__icon icon-envelope-open"></i>
              <div class="subscribe__inner"> <span class="subscribe__title">Grab the Best Deals</span> <span class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span> </div>
              <form class="subscribe__form form-inline">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email ...">
                  <input class="ui-btn ui-btn_warning" type="submit" value="SUBSCRIBE">
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
    <!-- end container -->
    
    <div class="section-area section-social-links wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
      <div class="container">
        <div class="row">
          <div class="col-xs-12"> <span class="social-links__title">Let’s Connect With Us</span>
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
    <!-- end section-social-links -->
    
    <footer class="footer footer_mod-a wow bounceInUp" data-wow-duration="2s">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3"> <img src="<?=path_members()?>/img/logo_mod-a.png" height="51" width="162" alt="Logo">
              <div class="footer-info">
                <p>Crabitur venenatis lacus nec erat. Sed veliter urna sollicitu euismo nec hendrerit vel belitu Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                <a class="btn btn-default" href="javascript:void(0);">READ MORE</a> </div>
            </div>
            <div class="col-md-2">
              <h3 class="footer-title">INFORMATION</h3>
              <ul class="footer-list">
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">About Shop</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Delivery Information</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Privacy Policy</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Terms & Conditions</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Customer Services</a> </li>
              </ul>
            </div>
            <div class="col-md-2">
              <h3 class="footer-title">MY ACCOUNT</h3>
              <ul class="footer-list">
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Order History</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Personal Information</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">My Cart</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Checkout & Pay</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Shipping Information</a> </li>
              </ul>
            </div>
            <div class="col-md-2">
              <h3 class="footer-title">USEFUL LINKS</h3>
              <ul class="footer-list">
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Secure Payment</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Shopping Guide</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Latest Deals</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Best Sellers</a> </li>
                <li class="footer-list__item"> <a class="footer-list__link" href="javascript:void(0);">Father’s Day Special</a> </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="footer-title">OUR ADDRESS</h3>
              <div class="footer-contacts">
                <address>
                <i class="icon icon-pointer"></i>383 Inner Street, Outer City, Newyork , LA&nbsp;USA 33021
                </address>
              </div>
              <div class="footer-contacts"><i class="icon icon-call-end"></i>+1 234 567800</div>
              <div class="footer-contacts"><i class="icon icon-envelope-open"></i><a href="mailto:orders@domain.com"></a>orders@domain.com</div>
            </div>
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </div>
      <!-- end footer-top -->
      
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="list-payments list-unstyled">
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/1.jpg" height="22" width="32" alt="payments"></a></li>
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/2.jpg" height="22" width="32" alt="payments"></a></li>
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/3.jpg" height="22" width="32" alt="payments"></a></li>
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/4.jpg" height="22" width="32" alt="payments"></a></li>
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/5.jpg" height="22" width="32" alt="payments"></a></li>
                <li class="list-payments__item"><a href="javascript:void(0);"><img src="<?=path_members()?>/media/payments/6.jpg" height="22" width="32" alt="payments"></a></li>
              </ul>
              <ul class="footer-nav list-unstyled">
                <li class="footer-nav__item"> <a class="footer-nav__link" href="javascript:void(0);">OUR BLOG</a> </li>
                <li class="footer-nav__item"> <a class="footer-nav__link" href="javascript:void(0);">PARTNERS</a> </li>
                <li class="footer-nav__item"> <a class="footer-nav__link" href="javascript:void(0);">ADVERTISE</a> </li>
                <li class="footer-nav__item"> <a class="footer-nav__link" href="javascript:void(0);">PRIVACY POLICY</a> </li>
                <li class="footer-nav__item"> <a class="footer-nav__link" href="javascript:void(0);">CONTACT US</a> </li>
              </ul>
              <div class="copyright">Copyright © 2015 <a class="color_primary" href="javascript:void(0);">Templines. </a><span class="br">All Rights Reserved.</span></div>
            </div>
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </div>
      <!-- end footer-bottom --> 
    </footer>
  </div>
  <!-- end #wrapper --> 
  
</div>
<!-- end layout-theme --> 

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
