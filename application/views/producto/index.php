<?= $headers ?>

<!-- CONTENIDO ****************************************************************-->
<?php // print_r($productos); ?>
<body>
    <div class="mv-site">
      <section class="main-banner mv-wrap">
        <div data-image-src="images/background/demo_bg_17.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">NUESTROS PRODUCTOS</span><img src="<?=base_url();?>assets/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="index.php"><i class="fa fa-home"></i></a></li>
              <li><a href="\producto\index.php">Productos</a></li>
             <!-- <li><a></a></li>-->
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-grid-3-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row mv-content-sidebar">
            <div class="mv-c-s-content col-xs-12 col-md-8 col-lg-9">
              <div class="row mv-list-product-wrapper mv-block-style-9" >
                <div class="block-9-list mv-list-product" id="contenedor-producto">
                  <!-- productos-->
                  <?php 
                  foreach ($productos as $key => $value) {
                    ?>
                    <!-- Aqui colocamos el item -->
                    <article class="col-xs-6 col-sm-4 col-md-6 col-lg-4 item item-product-grid-3 post">
                        <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                        <div style="background-color: #fff;" class="content-thumb">
                            <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="<?=$value["descripcion_facilito"]?>"><img src="<?=base_url();?>assets/images/productos/<?=$value["codigo"]?>.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="<?=$value["descripcion_facilito"]?>" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                            <div class="content-message mv-message-style-1">
                                <div class="message-inner"></div>
                            </div>

                            <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                                <div class="label-2-inner">
                                <ul class="label-2-ul">
                                    <li class="number">-25%</li>
                                    <li class="text">sale</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="content-default">
                            <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                            <div class="rate-inner mv-f-14">
                                <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                            </div>
                            </div>

                            <div class="content-price"><span class="new-price">$ 128.24</span><span class="old-price">$ 170.99</span></div>
                            <div class="content-desc"><a href="#" class="mv-overflow-ellipsis"><?=$value["descripcion_facilito"]?></a></div>
                        </div>

                        <div class="content-hover">
                            <div class="content-button mv-btn-group text-center">
                            <div class="group-inner">
                                <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="mv-btn mv-btn-style-1 btn-1-h-40 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-signal"></i><span class="btn-text">compare</span></span></button>
                                <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </article>
                    <!-- Aqui termina el item -->
                    <?php
                  }
                  ?>
                  <!-- .end productos-->

                </div>
              </div>
              <!-- .mv-list-product-wrapper-->
<!-- paginación
              <div class="mv-pagination-wrapper">
                <div class="mv-pagination-style-1 has-count-post">
                  <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
                  <ul class="pagination">
                    <li class="prev"><a href="#">prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a>3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">next</a></li>
                  </ul>
                </div>


              </div>
              -->
              <!-- .mv-pagination-wrapper-->
            </div>
            <!-- .mv-c-s-content-->

            <div class="mv-c-s-sidebar col-xs-12 col-md-4 col-lg-3 hidden-xs hidden-sm">
              <div class="mv-c-s-sidebar-inner">
                <div class="mv-aside mv-aside-search">
                  <div class="aside-title mv-title-style-11">search</div>
                  <div class="aside-body">
                    <form method="GET" class="form-aside-search">
                      <div class="mv-inputbox-icon right">
                        <input type="text" name="test138" class="mv-inputbox mv-inputbox-style-2"/>
                        <button type="submit" class="icon mv-btn mv-btn-style-4 fa fa-search"></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- .mv-aside-search-->

                <div class="mv-aside mv-aside-product-type">
                  <div class="aside-title mv-title-style-11">CATEGORIAS</div>
                  <div class="aside-body">
                    <nav class="product-type-menu mv-menu-style-1">
                      <ul>
                        <?php 
                        foreach ($categorias as $key => $value) {
                        ?>
                            <li><a href="<?=base_url();?>producto/<?=$value["id"]?>" class="mv-icon-left-style-5"><?=$value["nombre"]?><span class="sub-text">&nbsp; (<?=$value["cantidad"]?>)</span></a></li>
                        <?php
                        }
                        ?>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-product-type-->

                <div class="mv-aside mv-aside-filter-by-size">
                  <div class="aside-title mv-title-style-11">filter by</div>
                  <div class="aside-body">
                    <nav class="filter-by-price-menu mv-menu-style-1">
                      <ul>
                        <li><a href="#" class="mv-icon-left-style-5">Extra Large</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Extra Small</a></li>
                        <li class="active"><a href="#" class="mv-icon-left-style-5">Large</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Medium</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">One Size Fits All</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Small</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Taille Unique</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Sale</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-filter-by-size-->

                <div class="mv-aside mv-aside-size">
                  <div class="aside-title mv-title-style-11">size</div>
                  <div class="aside-body">
                    <nav class="size-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-21">XXL</a><a href="#" class="mv-btn mv-btn-style-21 active">XL</a><a href="#" class="mv-btn mv-btn-style-21">L</a><a href="#" class="mv-btn mv-btn-style-21">M</a><a href="#" class="mv-btn mv-btn-style-21">S</a></div>
                      </div>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-size-->

                <div class="mv-aside mv-aside-color">
                  <div class="aside-title mv-title-style-11">color</div>
                  <div class="aside-body">
                    <div class="color-list mv-list-inline-style-1 space-10">
                      <ul class="list-inline-1">
                        <li class="active"><a href="#"><span style="background-color: #7bef66;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #ff8888;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #c4dd66;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #94b7f7;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #a3fbff;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #f7fb0d;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #7b7878;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #d041ff;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #fdab14;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-color-->

                <div class="mv-aside mv-aside-products">
                  <div class="aside-title mv-title-style-11">products</div>
                  <div class="aside-body">
                    <div class="products-list">
                      <div class="mv-block-style-24">
                        <div class="block-24-list">
                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Open Face Helmets"><img src="images/demo/demo_2.png" alt="demo"/></a><a href="images/demo/demo_2.png" title="Open Face Helmets" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Open Face Helmets" class="mv-overflow-ellipsis">Open Face Helmets</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$200,00</div>
                                    <div class="old-price">$250,99</div>
                                  </div>
                                  <div data-rate="true" data-score="4.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Spada Enforcer WP"><img src="images/demo/demo_3.png" alt="demo"/></a><a href="images/demo/demo_3.png" title="Spada Enforcer WP" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Spada Enforcer WP" class="mv-overflow-ellipsis">Spada Enforcer WP Spada Enforcer WP</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$300,00</div>
                                    <div class="old-price">$400,99</div>
                                  </div>
                                  <div data-rate="true" data-score="5.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Richa Drift Water"><img src="images/demo/demo_7.png" alt="demo"/></a><a href="images/demo/demo_7.png" title="Richa Drift Water" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Richa Drift Water" class="mv-overflow-ellipsis">Richa Drift Water</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$210,00</div>
                                    <div class="old-price">$290,99</div>
                                  </div>
                                  <div data-rate="true" data-score="3.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->
                        </div>
                      </div>
                      <!-- .mv-block-style-24-->
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-products-->

                <div class="mv-aside mv-aside-tags">
                  <div class="aside-title mv-title-style-11">tags</div>
                  <div class="aside-body">
                    <div class="tag-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22 active">Gloves</a><a href="#" class="mv-btn mv-btn-style-22">Sercurity</a><a href="#" class="mv-btn mv-btn-style-22">Boots</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Luggage</a><a href="#" class="mv-btn mv-btn-style-22">Maintenance</a><a href="#" class="mv-btn mv-btn-style-22">Bodywork</a><a href="#" class="mv-btn mv-btn-style-22">Gift</a><a href="#" class="mv-btn mv-btn-style-22">Exhauts</a><a href="#" class="mv-btn mv-btn-style-22">Tyres</a><a href="#" class="mv-btn mv-btn-style-22">Casual Wear</a><a href="#" class="mv-btn mv-btn-style-22">R&G Racing</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-tags-->
              </div>
            </div>
            <!-- .mv-c-s-sidebar-->
          </div>
        </div>
      </section>
      <!-- .mv-main-body-->
      <!-- .mv-newsletter-style-1-->


      <div class="off-canvas-wrapper-left hidden-md hidden-lg">
        <div class="off-canvas-left">
          <div class="off-canvas-header">
            <button class="btn-close-off-canvas click-close-off-canvas">x</button>
          </div>
          <div class="off-canvas-body">
            <nav class="main-nav">
              <ul class="nav sf-menu expand-all">
                <li class="mega-columns"><a href="index.html"><span class="menu-text">Home <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul class="row">
                    <li class="col-xs-3 mega-col"><a href="index.html" class="mega-title"><span class="menu-text">Homepage Demos</span></a>
                      <ul class="mega-content">
                        <li class="active"><a href="index.html">Home 1</a></li>
                        <li><a href="home-2.html">Home 2</a></li>
                        <li><a href="home-3.html">Home 3</a></li>
                      </ul>
                    </li>
                    <li class="col-xs-3 mega-col"><a href="index.html" class="mega-title"><span class="menu-text">Homepage Demos</span></a>
                      <ul class="mega-content">
                        <li><a href="home-4.html">Home 4</a></li>
                        <li><a href="home-5.html">Home 5</a></li>
                      </ul>
                    </li>
                    <li class="col-xs-3 mega-col"><a href="index.html" class="mega-title"><span class="menu-text">Homepage Demos</span></a>
                      <ul class="mega-content">
                        <li><a href="home-lookbook-1.html">Home Lookbook 1</a></li>
                        <li><a href="home-lookbook-2.html">Home Lookbook 2</a></li>
                      </ul>
                    </li>
                    <li class="col-xs-3 mega-col"><a href="index.html" class="mega-title"><span class="menu-text">Homepage Demos</span></a>
                      <ul class="mega-content">
                        <li><a href="home-parallax.html">Home Parallax</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="menu-text">Product <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="product-list.html">Product List</a></li>
                    <li><a href="product-grid-2.html">Product Grid 2</a></li>
                    <li><a href="product-grid-3.html">Product Grid 3</a></li>
                    <li><a href="product-grid-3-no-sb.html">Product Grid 3 No Sidebar</a></li>
                    <li><a href="product-grid-4-no-sb.html">Product Grid 4 No Sidebar</a></li>
                    <li><a href="product-grid-5-fullwidth.html">Product Grid 5 Fullwidth</a></li>
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="product-detail-rated.html">Product Detail Rated</a></li>
                    <li><a href="search.html">Search</a></li>
                  </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="compare.html">Compare</a></li>
                    <li><a href="track-your-order.html">Track Your Order</a></li>
                    <li><a href="cart-empty.html">Cart Empty</a></li>
                  </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                    <li><a href="blog-grid-3-no-sb.html">Blog Grid 3 No Sidebar</a></li>
                    <li><a href="blog-grid-3-mansory-no-sb.html">Blog Grid 3 Mansory No Sidebar</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                  </ul>
                </li>
                <li><a href="about-us.html"><span class="menu-text">About Us</span></a></li>
                <li><a href="contact.html"><span class="menu-text">Contact</span></a></li>
                <li><a href="#"><span class="menu-text">Pages <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul class="dropdown-left">
                    <li><a href="login.html">Login & Register</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="newsletter.html">Newsletter</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="common-element.html">Common Element</a></li>
                    <li><a href="error-page.html">Error Page</a></li>
                    <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                      <ul>
                        <li><a href="#">Example menu item</a></li>
                        <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                          <ul>
                            <li><a href="#">Example menu item</a></li>
                            <li><a href="#">Example menu item</a></li>
                          </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                          <ul class="dropdown-left">
                            <li><a href="#">Example menu item</a></li>
                            <li><a href="#">Example menu item</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- .off-canvas-wrapper-left-->

      <div class="off-canvas-wrapper-right hidden-md hidden-lg">
        <div class="off-canvas-right">
          <div class="off-canvas-header">
            <button class="btn-close-off-canvas click-close-off-canvas">x</button>
          </div>

          <div class="off-canvas-body">
            <div class="mv-aside mv-aside-search">
              <div class="aside-title mv-title-style-11">search</div>
              <div class="aside-body">
                <form method="GET" class="form-aside-search">
                  <div class="mv-inputbox-icon right">
                    <input type="text" name="test138" class="mv-inputbox mv-inputbox-style-2"/>
                    <button type="submit" class="icon mv-btn mv-btn-style-4 fa fa-search"></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- .mv-aside-search-->

            <div class="mv-aside mv-aside-filter-by-price">
              <div class="aside-title mv-title-style-11">filter by price</div>
              <div class="aside-body">
                <form method="GET" class="form-aside-filter-by-price">
                  <div class="mv-slider-range">
                    <div class="slider-range-wrapper mv-slider-range-style-1">
                      <div class="slider-range"></div>
                    </div>
                    <div class="mv-dp-table align-middle">
                      <div class="mv-dp-table-cell view-values">Price: $<span class="min-value"></span> - $<span class="max-value"></span></div>
                      <div class="mv-dp-table-cell filter-button">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-30">filter</button>
                      </div>
                    </div>
                  </div>
                </form>

                <nav class="filter-by-price-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">$10 - $50<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$50 - $100<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$100 - $500<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$500 - $1000<span class="sub-text">&nbsp; (16)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$1000 - $5000<span class="sub-text">&nbsp; (6)</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-filter-by-price-->

            <div class="mv-aside mv-aside-product-type">
              <div class="aside-title mv-title-style-11">product type</div>
              <div class="aside-body">
                <nav class="product-type-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">Full Face Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Flip Up Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Open Face Helmets<span class="sub-text">&nbsp; (38)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Adventure Helmets<span class="sub-text">&nbsp; (12)</span></a>
                      <ul class="sub-menu">
                        <li><a href="#" class="mv-icon-left-style-5">AGV Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Arai Helmets<span class="sub-text">&nbsp; (12)</span></a></li>
                        <li class="active"><a href="#" class="mv-icon-left-style-5">Bell Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">BOX Helmets<span class="sub-text">&nbsp; (15)</span></a></li>
                      </ul>
                    </li>
                    <li><a href="#" class="mv-icon-left-style-5">Trousers<span class="sub-text">&nbsp; (19)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Dresses<span class="sub-text">&nbsp; (34)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Shoes<span class="sub-text">&nbsp; (22)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Accessories<span class="sub-text">&nbsp; (17)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Sale<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5"> <strong>View More</strong><span class="sub-text">&nbsp; (50) &nbsp;</span><i class="fa fa-caret-down"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-product-type-->

            <div class="mv-aside mv-aside-filter-by-size">
              <div class="aside-title mv-title-style-11">filter by</div>
              <div class="aside-body">
                <nav class="filter-by-price-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">Extra Large</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Extra Small</a></li>
                    <li class="active"><a href="#" class="mv-icon-left-style-5">Large</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Medium</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">One Size Fits All</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Small</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Taille Unique</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Sale</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-filter-by-size-->

            <div class="mv-aside mv-aside-size">
              <div class="aside-title mv-title-style-11">size</div>
              <div class="aside-body">
                <nav class="size-list">
                  <div class="mv-btn-group">
                    <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-21">XXL</a><a href="#" class="mv-btn mv-btn-style-21 active">XL</a><a href="#" class="mv-btn mv-btn-style-21">L</a><a href="#" class="mv-btn mv-btn-style-21">M</a><a href="#" class="mv-btn mv-btn-style-21">S</a></div>
                  </div>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-size-->

            <div class="mv-aside mv-aside-color">
              <div class="aside-title mv-title-style-11">color</div>
              <div class="aside-body">
                <div class="color-list mv-list-inline-style-1 space-10">
                  <ul class="list-inline-1">
                    <li class="active"><a href="#"><span style="background-color: #7bef66;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #ff8888;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #c4dd66;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #94b7f7;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #a3fbff;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #f7fb0d;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #7b7878;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #d041ff;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #fdab14;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- .mv-aside-color-->

            <div class="mv-aside mv-aside-products">
              <div class="aside-title mv-title-style-11">products</div>
              <div class="aside-body">
                <div class="products-list">
                  <div class="mv-block-style-24">
                    <div class="block-24-list">
                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Open Face Helmets"><img src="images/demo/demo_2.png" alt="demo"/></a><a href="images/demo/demo_2.png" title="Open Face Helmets" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Open Face Helmets" class="mv-overflow-ellipsis">Open Face Helmets</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$200,00</div>
                                <div class="old-price">$250,99</div>
                              </div>
                              <div data-rate="true" data-score="4.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->

                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Spada Enforcer WP"><img src="images/demo/demo_3.png" alt="demo"/></a><a href="images/demo/demo_3.png" title="Spada Enforcer WP" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Spada Enforcer WP" class="mv-overflow-ellipsis">Spada Enforcer WP Spada Enforcer WP</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$300,00</div>
                                <div class="old-price">$400,99</div>
                              </div>
                              <div data-rate="true" data-score="5.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->

                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Richa Drift Water"><img src="images/demo/demo_7.png" alt="demo"/></a><a href="images/demo/demo_7.png" title="Richa Drift Water" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Richa Drift Water" class="mv-overflow-ellipsis">Richa Drift Water</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$210,00</div>
                                <div class="old-price">$290,99</div>
                              </div>
                              <div data-rate="true" data-score="3.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->
                    </div>
                  </div>
                  <!-- .mv-block-style-24-->
                </div>
              </div>
            </div>
            <!-- .mv-aside-products-->

            <div class="mv-aside mv-aside-tags">
              <div class="aside-title mv-title-style-11">tags</div>
              <div class="aside-body">
                <div class="tag-list">
                  <div class="mv-btn-group">
                    <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22 active">Gloves</a><a href="#" class="mv-btn mv-btn-style-22">Sercurity</a><a href="#" class="mv-btn mv-btn-style-22">Boots</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Luggage</a><a href="#" class="mv-btn mv-btn-style-22">Maintenance</a><a href="#" class="mv-btn mv-btn-style-22">Bodywork</a><a href="#" class="mv-btn mv-btn-style-22">Gift</a><a href="#" class="mv-btn mv-btn-style-22">Exhauts</a><a href="#" class="mv-btn mv-btn-style-22">Tyres</a><a href="#" class="mv-btn mv-btn-style-22">Casual Wear</a><a href="#" class="mv-btn mv-btn-style-22">R&G Racing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .mv-aside-tags-->
          </div>
        </div>
      </div>
      <!-- .off-canvas-wrapper-right-->
    </div>
    <!-- .mv-site-->

    <div class="popup-wrapper">
      <div id="popupSearch" tabindex="-1" role="dialog" aria-hidden="true" class="popup-search modal fade modal-effect-zoom mv-modal-style-2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form method="GET" action="/motor_vehikal_html/search.html" class="form-search">
              <div class="mv-inputbox-icon right">
                <input type="text" name="test138" data-mv-placeholder="Type here and enter to search" placeholder="Type here and enter to search" class="mv-inputbox mv-inputbox-style-5"/>
                <button type="submit" class="icon mv-btn mv-btn-style-4"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- .popup-search-->
    </div>
    <!-- .popup-wrapper-->

</body>


  <!-- FIN CONTENIDO ****************************************************************-->
<?= $footers ?>
