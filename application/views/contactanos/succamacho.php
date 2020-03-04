<?=$headers?>
<section class="main-banner mv-wrap">
        <div data-image-src="images/background/demo_bg_24.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <!--<div class="mv-title-style-9"><span class="main">CONTÁCTANOS</span><img src="<?=base_url()?>assets/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div> -->
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
              <li><a>Contactanos / Sucursal Camacho</a></li>
            </ul>
          </div>
        </div>
</section>
<section class="mv-main-body contact-us-main mv-bg-gray mv-wrap">

	  <div class="contact-us-map">
          <div class="map-embed">
		          <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.521726845303!2d-68.13444058490268!3d-16.499737945093813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f207033e9a389%3A0x2dfa175eb85b3c8c!2sLa%20Salvadora%20Hnos%20SRL!5e0!3m2!1ses-419!2sbo!4v1582295645156!5m2!1ses-419!2sbo" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></center>
          </div>
  	 </div>
</section>
<section class="mv-main-body contact-us-main mv-bg-gray mv-wrap>
	<div class="block-32-contact mv-box-shadow-gray-1">
              <div class="row">

                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-map-marker fa  fa-map-marker mv-f-54 mv-color-primary"></span>
                            <div class="text-main">Dirección </div>
                            <div class="text-sub">Av.Camacho Nro 1481 Edif.La Urbana Planta Baja Zona Central </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-mobile fa fa-mobile mv-f-60 mv-color-primary"></span>
                            <div class="text-main">Teléfonos</div>
                            <div class="text-sub"> 
                             Teléfono:<a href="index.php">2-202009</a> <br>
                             Celular:<a href="index.php">78849964</a><br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-envelope fa fa-envelope-o mv-f-48 mv-color-primary"></span>
                            <div class="text-main">Correo</div>
                            <div class="text-sub">
                            Correo: <a href="index.php">sucmacho@lasalvadorahnos.com</a><br>
                            Correo:<a href="index.php">info@lasalvadorahnos.com </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
</section>
<!-- .main-breadcrumb-->
<section class="mv-main-body contact-us-main mv-bg-gray mv-wrap">
        <div class="contact-us-form">
          <div class="container">
            <div class="mv-block-style-32">
              <div class="block-32-form mv-box-shadow-gray-1">
                <div class="block-32-form-title mv-title-style-3">
                  <div class="title-3-text"><span class="behind">Formulario de Contacto</span><span class="main">Formulario de Contacto</span></div>
                </div>
                <!-- .block-32-form-title-->

                <div class="block-32-form-main">

                 <form action="<?=base_url()?>Contactanos/email"  method="post"  class="form-contact mv-form-horizontal" >
                    <input type="hidden" name="sucursal" value="camacho">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Nombre</strong></div>
                          <div class="col-md-10 mv-field">
                            <input placeholder="Ingrese su Nombre" type="text" name="nombre" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Celular</strong></div>
                          <div class="col-md-10 mv-field">
                            <input placeholder="Ingrese su Celular" type="text" name="celular" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Correo</strong></div>
                          <div class="col-md-10 mv-field">
                            <input placeholder="Ingrese su Correo Electrónico" type="email" name="correo" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase"  >Teléfono</strong></div>
                          <div class="col-md-10 mv-field">
                            <input placeholder=" Si tiene un sitio web" type="text" name="telefono" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mv-form-group input-message-wrapper">
                      <div class="col-md-1 mv-label"> <strong class="text-uppercase"> </strong></div>
                      <div class="col-md-11 mv-field">
                        <textarea name="mensaje" rows="6" placeholder="Mensaje" data-mv-placeholder="solicita tu cotización a travez de la suscripción " class="mv-inputbox mv-inputbox-style-1"></textarea>
                      </div>
                    </div>

                    <div class="mv-form-group submit-button">
                      <div class="col-md-1 mv-label"> <strong class="text-uppercase"> </strong></div>
                      <div class="col-md-11 mv-field">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-50 mv-btn-block btn-subscribe">Enviar</button>
                      </div>
                    </div>
                  </form>
                  <!-- .form-contact-->
                </div>
                <!-- .block-32-form-main-->
              </div>
              <!-- .block-32-form-->

              
              <!-- .block-32-contact-->
            </div>
            <!-- .mv-block-style-32-->
          </div>
          <!-- .contact-us-form-->
        </div>
<!-- .contact-us-map-->
</section>
<?=$footers?>