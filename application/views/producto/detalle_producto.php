<?= $headers ?>
<section class="mv-main-body product-detail-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="post">
            <div class="block-info mv-box-shadow-gray-1">
              <div class="mv-block-style-27">
                <div class="mv-col-wrapper">
                  <div class="mv-col-left block-27-col-slider">
                    <div class="mv-block-style-26">
                      <div class="product-detail-slider mv-slick-slide mv-lightbox-style-1">
                       
											  <div class="block-26-gallery-main">
                          <div class="slider gallery-main">
                        		<div class="slick-slide">
                            <div class="slick-slide-inner"><a href="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/1.png" title="" class="mv-lightbox-item"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/1.png" alt="demo" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->
                            <div class="slick-slide">
														<div class="slick-slide-inner"><a href="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/2.png" title="" class="mv-lightbox-item"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/2.png" alt="demo" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->
                            <div class="slick-slide">
														<div class="slick-slide-inner"><a href="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/3.png" title="" class="mv-lightbox-item"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/3.png" alt="demo" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->                      
													</div>
													
                        </div>

                        <!-- .block-26-gallery-main-->

                        <div class="block-26-gallery-thumbs">
                          <div class="block-26-gallery-thumbs-inner">
                            
														<div class="slider gallery-thumbs">
                              <div class="slick-slide">
                              <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/1.png" alt="demo" class="block-26-thumbs-img"/></div>
                              </div>
                              <div class="slick-slide">
                              <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/2.png" alt="demo" class="block-26-thumbs-img"/></div>
                              </div>
                              <div class="slick-slide">
                              <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="http://lasalvadorahnos.com/detalle_producto/<?=$producto[0]['id_producto'];?>/3.png" alt="demo" class="block-26-thumbs-img"/></div>
                              </div>
                            </div>
                            <div class="slick-slide-control"></div>
                          </div>
                        </div>
												
                        <!-- .block-26-gallery-thumbs-->
                      </div>
                      <!-- .product-detail-slider-->
                    </div>
                    <!-- .mv-block-style-26-->

                    <div onclick="$(this).remove()" class="block-27-sale-off mv-label-style-2 text-center">
                      <div class="label-2-inner">
                        <ul class="label-2-ul">
                         <!-- <li class="number">-25%</li>
                          <li class="text">sale</li> -->
                        </ul>
                      </div>
                    </div>

                    <!--<div><img src="<?=base_url();?>assets/images/logo/logolsh.png" alt="logo" onclick="$(this).remove()" class="block-27-logo"/></div> -->
                        <div class="block-27-logo"> <?=$grupo[0]['nombre']?> </div>
                  </div>

                  <div class="mv-col-right block-27-col-info">
                    <div class="col-info-inner">
                      <div class="block-27-info">
                      <div class="block-27-title">NOMBRE:</div>
                      <center><i>  <div class="block-27-title"><?=$producto[0]['descripcion_facilito'] ?></div></i></center>

                        <div class="block-27-price">
                        <div class="block-27-title">CODIGO:</div>
                          <center><i> <div class="block-27-title"><?=$producto[0]['id_producto'] ?></div></i></center>
                         <!-- <div class="new-price">$115,00</div>
                          <div class="old-price">$127,99</div> -->
                        </div>
                        <div class="block-27-title">DETALLE:</div>

                        <center><i>  <div class="block-27-title"><?=$producto[0]['descripcion'] ?></div></i></center>
                        
                       <!-- <div class="block-27-table-info">
                          <form method="GET">
                            <table>
                              <tr>
                                <td>Tamaño:</td>
                                <td>
                                  <div class="mv-list-inline-style-1">
                                    <ul class="list-inline-1">
                                      <li class="active"><a href="#" class="mv-btn mv-btn-style-8">XXL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">XL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">L</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">M</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">S</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Color:</td>
                                <td>
                                 <div class="mv-list-inline-style-1 space-10">
                                    <ul class="list-inline-1">
                                      <li class="active"><a href="#"><span style="background-color: #ffb535" class="icon-color"></span></a></li>
                                      <li><a href="#"><span style="background-color: #222222" class="icon-color"></span></a></li>
                                      <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                                    </ul>
                                  </div> 
                                </td>
                              </tr>
                              <tr>
                                <td>cantidad:</td>
                                <td>
                                 <div class="mv-spinner-style-1 input-quantity-wrapper">
                                    <input type="text" name="test138" value="1" class="mv-inputbox mv-only-numeric input-quantity-product-detail"/>
                                  </div> 
                                </td>
                              </tr>
                              <tr>
                                <td>Categoría:</td>
                                <td>
                                 <div class="mv-list-inline-style-2">
                                    <ul class="list-inline-2">
                                      <li class="active"><a href="#" class="mv-btn">Women Shirts</a></li>
                                      <li><a href="#" class="mv-btn">Tops</a></li>
                                      <li><a href="#" class="mv-btn">Shirts & Blouses</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                             
                            </table>
                          </form>
                        </div> -->
                      </div>
                      

                      <div class="block-27-message content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div> 
                      
                    </div>

                  <!--  <div class="block-27-button">
                      <div class="mv-dp-table align-middle">
                        <div class="mv-dp-table-cell">
                          <div class="mv-btn-group text-left">
                            <div class="group-inner">
                              <button type="button" class="mv-btn mv-btn-style-1 btn-1-h-50 responsive-btn-1-type-3 btn-add-to-cart"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">add to cart</span></span></button>
                              <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-50 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                              <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-50 responsive-btn-3-type-1 btn-compare"><i class="btn-icon fa fa-signal"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  </div>
                </div>
              </div>
              <!-- .mv-block-style-27-->
            </div>
            <!-- .block-info-->

           <!-- <div class="row block-info-more">
              <div class="col-sm-6 col-specification">
                <div class="specification-main mv-tab-style-3 mv-box-shadow-gray-1 mv-bg-white">
                  <ul role="tablist" class="tab-list nav nav-tabs">
                    <li role="presentation" class="active"><a href="#tab31" aria-controls="tab31" role="tab" data-toggle="tab">Description</a></li>
                    <li role="presentation"><a href="#tab32" aria-controls="tab32" role="tab" data-toggle="tab">Specification</a></li>
                    <li role="presentation"><a href="#tab33" aria-controls="tab33" role="tab" data-toggle="tab">Information</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab31" role="tabpanel" class="tab-pane active">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    </div>
                    <div id="tab32" role="tabpanel" class="tab-pane">
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="tab33" role="tabpanel" class="tab-pane">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint delectus magnam sunt. Aliquid laboriosam ipsa, fugiat sequi, corporis nesciunt reiciendis deleniti consequatur quos possimus iusto commodi officiis tempora porro et.</p>
                    </div>
                  </div>
                </div>
               
              </div>

             <div id="customer-review" class="col-sm-6 col-review">
                <div class="review-main mv-well-style-1 mv-box-shadow-gray-1 mv-bg-white">
                  <div class="well-1-header">
                    <div class="mv-title-style-11">customer review</div>
                  </div>
                  <div class="well-1-body">
                    <div class="review-profile">
                      <div class="mv-block-style-37">
                        <div class="block-37-thumb"><a href="#"><span style="background-image: url(<?=base_url();?>images/avatar/avatar_2.jpg);" class="block-37-thumb-img"></span></a></div>
                        <div class="block-37-main">
                          <div class="block-37-name"><a href="#">Roman Travis</a></div>
                        </div>
                      </div>
                    
                    </div>
                   

                    <div class="review-rating-field">
                      <form method="GET" class="form-review">
                        <div class="mv-form-group rating-field">
                          <div class="mv-field">
                            <div class="mv-rate enabled-rating"><strong class="label-rating">Rate this product: </strong>
                              <div class="rate-inner mv-f-28 text-left">
                                <div class="stars-wrapper"><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a></div>
                                <input type="hidden" name="test139" class="input-score-rate"/>
                              </div><span class="rate-text"></span>
                            </div>
                          </div>
                        </div>
                        <div class="mv-form-group">
                          <div class="mv-field">
                            <textarea name="test138" data-mv-placeholder="Description" placeholder="Description" class="mv-resize-vertical mv-inputbox mv-inputbox-style-1 textarea-desc"></textarea>
                          </div>
                        </div>
                        <div class="mv-form-group text-right">
                          <div class="mv-field">
                            <button type="submit" class="mv-btn mv-btn-style-5 responsive-btn-5-type-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    

                    <div class="review-list mv-block-style-28">
                      <div class="block-28-list">
                        <div class="item">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span style="background-image: url(images/avatar/avatar_4.jpg);" class="block-28-thumb-img"></span></a></div>
                            <div class="mv-dp-table-cell block-28-main">
                              <div class="block-28-main-header">
                                <div class="block-28-name"><a href="#">Jonathan Doe</a></div><span class="block-28-date">December 21, 2016</span>
                                <div data-rate="true" data-score="4" class="block-28-rate mv-rate">
                                  <div class="rate-inner mv-f-14 text-left">
                                    <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  </div>
                                </div>
                              </div>
                              <div class="block-28-desc">Proin est purus, elementum eu tempus ut, molestie vel magnaauctor nibh. </div>
                            </div>
                          </div>
                        </div>
                        

                        <div class="item">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span style="background-image: url(images/avatar/avatar_5.jpg);" class="block-28-thumb-img"></span></a></div>
                            <div class="mv-dp-table-cell block-28-main">
                              <div class="block-28-main-header">
                                <div class="block-28-name"><a href="#">Louis Higgins</a></div>
                                <div class="block-28-date">December 01, 2016</div>
                                <div data-rate="true" data-score="5" class="block-28-rate mv-rate">
                                  <div class="rate-inner mv-f-14 text-left">
                                    <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  </div>
                                </div>
                              </div>
                              <div data-mv-resize-height="none" class="block-28-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                   

                    <div class="review-pagination">
                      <div class="mv-pagination-style-2 text-right">
                        <ul class="pagination">
                          <li class="first"><a href="#" class="fa fa-angle-double-left"></a></li>
                          <li class="prev"><a href="#" class="fa fa-angle-left"></a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a>3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li class="next"><a href="#" class="fa fa-angle-right"></a></li>
                          <li class="last"><a href="#" class="fa fa-angle-double-right"></a></li>
                        </ul>
                      </div>
                      
                    </div>
                   
                  </div>
                </div>
             
              </div> 
            </div> -->
           
          </div>
       
        </div>
      </section>

  <!-- FIN CONTENIDO ****************************************************************-->
	<?= $footers ?>

