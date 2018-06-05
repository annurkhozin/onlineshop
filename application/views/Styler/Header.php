<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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