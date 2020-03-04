<?= $headers ?>

<!-- CONTENIDO ****************************************************************-->
<?php // print_r($productos); ?>
<body>

	   <div class="mv-site">
      <section class="main-banner mv-wrap">
        <div data-image-src="images/background/demo_bg_17.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
             <!-- <div class="mv-title-style-9"><span class="main">NUESTROS PRODUCTOS</span><img src="<?=base_url();?>assets/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>-->
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
              <li><a href="<?=base_url();?>producto"><span class="menu-text">Productos</span></a></li>
					   <!-- <li><a></a></li>-->
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-grid-3-main mv-bg-gray mv-wrap">
        <div class="container">
				<?php  
				if(isset($busqueda)) {
			?> 
					<h3><?= count($productos) ?> productos encontrados</h3>
			<?php
				} 
					?> 
          <div class="row mv-content-sidebar">
            <div class="mv-c-s-content col-xs-12 col-md-8 col-lg-9">
              <div class="row mv-list-product-wrapper mv-block-style-9" >
                <div class="block-9-list mv-list-product" id="contenedor-producto">
                  <!-- productos-->
                  <?php 
                  foreach ($productos as $key => $value ) {
                    ?>
                    <!-- Aqui colocamos el item -->
                    <article class="col-xs-6 col-sm-4 col-md-6 col-lg-4 item item-product-grid-3 post">
                        <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                        <div style="background-color: #fff;" class="content-thumb">
                            <div class="thumb-inner mv-effect-relative"><a href="<?=base_url();?>Producto/detalle_producto/<?=$value['id_producto']?>" title="<?=$value["descripcion_facilito"]?>"><img src="<?=base_url();?>assets/images/productos/<?=$value["codigo"]?>.png" alt="demo" class="mv-effect-item"/></a><a href="<?=base_url();?>Producto/detalle_producto/<?=$value['id_producto']?>" title="<?=$value["descripcion_facilito"]?>" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
														<div class="content-price"><span class="new-price">COD <?=$value["id_producto"]?></span></div>
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
                  <div class="aside-title mv-title-style-11">BUSCAR</div>
                  <div class="aside-body">
                    <form method="GET" class="form-aside-search" action="<?= base_url() ?>Producto/busqueda">
                      <div class="mv-inputbox-icon right">
											<?php  
												if(isset($busqueda)) {
											?> 
													<input type="text" name="txtbusqueda" required class="mv-inputbox mv-inputbox-style-2" value= "<?= $busqueda ?>" />
											<?php
												} else {
													?> 
													<input type="text" name="txtbusqueda" required class="mv-inputbox mv-inputbox-style-2"/>	
											<?php
												}
											?>
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
												
                        foreach ($categorias as $key => $value ) {
                        ?>
                            <li><a href="<?=base_url();?>producto/<?=$value["id"]?>" class="mv-icon-left-style-5"><b><?=$value["nombre"]?></b><span class="sub-text">&nbsp; (<?=$value["cantidad"]?>)</span></a></li>
                        <?php
                        }
                        ?>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-product-type-->

                <div class="mv-aside mv-aside-filter-by-size">
                
								 <!-- <div class="aside-title mv-title-style-11">filter by</div>
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
                </div> -->
                <!-- .mv-aside-filter-by-size-->

               <!-- <div class="mv-aside mv-aside-size">
                  <div class="aside-title mv-title-style-11">size</div>
                  <div class="aside-body">
                    <nav class="size-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-21">XXL</a><a href="#" class="mv-btn mv-btn-style-21 active">XL</a><a href="#" class="mv-btn mv-btn-style-21">L</a><a href="#" class="mv-btn mv-btn-style-21">M</a><a href="#" class="mv-btn mv-btn-style-21">S</a></div>
                      </div>
                    </nav>
                  </div>
                </div> -->
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
             </div>
            </div>
            <!-- .mv-c-s-sidebar-->
          </div>
        </div>
      </section>
        
   </div>
 </body>
<?= $footers ?>
