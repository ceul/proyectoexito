<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Products Detail";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["gmap"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

	<!-- MAIN CONTENT -->
	<div id="content">


		<!--
			The ID "widget-grid" will start to initialize all widgets below 
			You do not need to use widgets if you dont want to. Simply remove 
			the <section></section> and you can use wells or panels instead 
			-->

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->

			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12">
					<!-- product -->
					<div class="product-content product-wrap clearfix product-deatil">
						<div id="user" class="row">
								<div class="col-md-5 col-sm-12 col-xs-12 ">
									<div class="product-image"> 
										<div id="myCarousel-2" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
											<li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
											<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<img src="img/demo/e-comm/detail-1.png" alt="">
											</div>
											<!-- Slide 2 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-2.png" alt="">
											</div>
											<!-- Slide 3 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-3.png" alt="">
											</div>
										</div>
										<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
										<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
										</div>
									</div>
									<div>
										<button hidden="hidden" id="btn-img" class="btn btn btn-warning btn-lg popup-with-form" href="#img_form">Imagenes</button>
									</div>
									<br>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
							
								<h2 class="name txt-color-green">
									<strong>Arrendado</strong> 
									<small>Publicado por <a href="javascript:void(0);">Carlos</a></small>
		 
								</h2>
								<hr>
								<h5>
									Dirección:  Carrera 14 # 14-62
								</h5>
								<h5>
									Costo: 50000 COP
								</h5>
								<h5>
									Fecha de inicio: 20 de Agosto del 2016	
								</h5>
								<h5>
									Fecha de fin: 19 de Agosto del 2017	
								</h5>
								<h5>
									Arrendado a: Empresa publicitaria Pare
								</h5>
														
								
								<hr>
								<div class="description description-tabs">


									<ul id="myTab" class="nav nav-pills">
										<li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Descripcion</a></li>
										<li class=""><a href="#specifications" data-toggle="tab">Especificaciones</a></li>
										<li class=""><a href="#reviews" data-toggle="tab">Reseñas</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade active in" id="more-information">
											<br>
<a id="descripcion" href="#desc_form" class="popup-with-form">Ventana ubicada en el centro de santa rosa de cabal, con alta concurrencia de personas en el dia y en la noche debido a estar dentro de la zona comercial del municipio. </a>
										</div>
										<div class="tab-pane fade" id="specifications">
											<br>
											<dl class="">
													<dt>Largo</dt>
			                                        <dd class="popup-with-form" id="largo" href="#espec_form">1.2 mts</dd>
			                                        <br>

			                                        <dt>Ancho</dt>
			                                        <dd class="popup-with-form" href="#espec_form" id="ancho">2 mts</dd>
			                                        
			                                    </dl>
										</div>
										<div class="tab-pane fade" id="reviews">
											<br>
											

											<div class="chat-body no-padding profile-message">
												<ul>
													<li class="message">
														<img src="img/avatars/1.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Alisha Molly 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																</span>
															</a> 
															
															
															Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved 
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
													<li class="message">
														<img src="img/avatars/2.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Aragon Zarko 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																</span>
															</a> 
															
															
															Excellent product, love it!
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
							

								</div>
								<hr>
								<div class="row">
									<div class="col-sm-1 col-md-2 col-lg-5">
										
											<button id="btn" class="btn btn btn-warning btn-lg" >Modificar</button>
										
									</div>
									<div class="col-sm-1 col-md-2 col-lg-5">
										
											<a href="#" id="smart-mod-eg1" class="btn btn-danger btn-lg">Eliminar</a>
										
									</div>
									
								</div>
								
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<form id="desc_form" class="white-popup-block mfp-hide smart-form">
	<header>Descripción</header>
	<fieldset>
		<div class="form-group">
			<div class="col-md-10">
				<textarea class="form-control" placeholder="Descripción" rows="4"></textarea>
			</div>
		</div>
		
	</fieldset>
	<footer>
		<button type="submit" class="btn btn-primary">Aceptar</button>
		<button type="button" class="btn btn-default" onclick="window.history.back();">Atras</button>
	</footer>
</form>

<form id="img_form" class="white-popup-block mfp-hide smart-form">
	<header>Imagenes</header>
	<fieldset>
		<form action="upload.php" class="dropzone" id="mydropzone"></form>
		<div>
			<form action="upload.php" class="dropzone" id="mydropzone"></form>
		</div>
		<!--Existe un conflicto con el form por eso el footer debe estar dentro del field-->
		<footer>
			<button type="submit" class="btn btn-primary">Aceptar</button>
			<button type="button" class="btn btn-default" onclick="window.history.back();">Cancelar</button>
		</footer>
	</fieldset>
	

</form>

<form id="espec_form" class="white-popup-block mfp-hide smart-form"> 
	<header>Especificaciones</header>	
	<fieldset>
		<label class="label col col-2">Largo</label>
		<section class="col col-3">
			<label class="input">
				<input type="number" step="0.01" name="largo" placeholder="Largo">
			</label>
		</section>
		<section class="col col-3">
			<label class="select">
			<select name="unidad">
				<option value="0" selected="">mts</option>
				<option value="11">centimetros</option>
				<option value="12">pulgadas</option>
			</select> <i></i> </label>
		</section>
	</fieldset>
	<fieldset>
		<label class="label col col-2">Ancho</label>
		<section class="col col-3">
			<label class="input">
				<input type="number" step="0.01" name="ancho" placeholder="Ancho">
			</label>
		</section>
		<section class="col col-3">
			<label class="select">
			<select name="unidad">
				<option value="0" selected="">mts</option>
				<option value="11">centimetros</option>
				<option value="12">pulgadas</option>
			</select> <i></i> </label>
		</section>
	</fieldset>
	<footer>
		<button type="submit" class="btn btn-primary">Aceptar</button>
		<button type="button" class="btn btn-default" onclick="window.history.back();">Cancelar</button>
	</footer>
</form>

<form id="ubi_form" class="white-popup-block mfp-hide smart-form">
	<header>Ubicación</header>
	<fieldset>
		<section>
			<label class="label">Direccion</label>
			<label class="input">
				<input maxlength="10" type="text" id="address">
			</label>
		</section>
		<section>
			<div id="map_canvas" class="google_maps" gmap-data-lat="29.895883" data-gmap-lng="-75.69966990350343" data-gmap-zoom="5">
										&nbsp;
			</div>
		</section>

		<section>
			<label class="label">Latitud de la dirección</label>
			<label class="input">
				<input maxlength="10" disabled="disabled" type="text" id="lat">
			</label>
		</section>
		<section>
			<label class="label">Longitud de la dirección</label>
			<label class="input">
				<input maxlength="10" disabled="disabled" type="text" id="lng">
			</label>
		</section>
	</fieldset>
	<footer>
		<button type="submit" class="btn btn-primary">Aceptar</button>
		<button type="button" class="btn btn-default" onclick="window.history.back();">Atras</button>
	</footer>

</form>
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/maxlength/bootstrap-maxlength.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/clockpicker/clockpicker.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/noUiSlider/jquery.nouislider.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/ion-slider/ion.rangeSlider.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>		
<script src="<?php echo ASSETS_URL; ?>/js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/knob/jquery.knob.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/x-editable/moment.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/x-editable/jquery.mockjax.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/x-editable/x-editable.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/typeahead/typeahead.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/typeahead/typeaheadjs.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jquery.magnific-popup.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/dropzone/dropzone.min.js"></script>
<script type="text/javascript">

	Dropzone.autoDiscover = false;
			$("#mydropzone").dropzone({
				//url: "/file/post",
				acceptedFiles: "image/*", // Accept images only
				addRemoveLinks : true,
				maxFilesize: 0.5,
				dictDefaultMessage: '<span class="dz-message"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Arrastre las imagenes <span class="font-xs">a subir</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O Click)</h4></span>',
				dictResponseError: 'Error subiendo la imagen!'
			});
	$(document).ready(function() {

		var pagefunction = function() {

		    /*jslint smarttabs:true */
			var colorful_style = [{
		
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#b1bc39"
				}]
			}, {
				"featureType" : "landscape.man_made",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ebad02"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#416d9f"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "off"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#ebad02"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#8ca83c"
				}]
			}];
		
			// Grey Scale
			var greyscale_style = [{
				"featureType" : "road.highway",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"stylers" : [{
					"visibility" : "on"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "poi.medical",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.medical",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"color" : "#cccccc"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#cecece"
				}]
			}, {
				"featureType" : "road.local",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#808080"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#808080"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#fdfdfd"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d2d2d2"
				}]
			}];
		
			// Black & White
			var monochrome_style = [{
				"featureType" : "road.highway",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#cecece"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "off"
				}]
			}];
		
			// Retro
			var metro_style = [{
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#eee8ce"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#b8cec9"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "off"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#000000"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3cdab"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#ced09d"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}];
		
			// Night
			var nightvision_style = [{
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"hue" : "#0008ff"
				}, {
					"lightness" : -75
				}, {
					"saturation" : 10
				}]
			}, {
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"color" : "#1f1d45"
				}]
			}, {
				"featureType" : "landscape.natural",
				"stylers" : [{
					"color" : "#1f1d45"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#01001f"
				}]
			}, {
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#e7e8ec"
				}]
			}, {
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#151348"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#f7fdd9"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#01001f"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#316694"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#1a153d"
				}]
		
			}];
		
			// Night Light
			var nightvision_highlight_style = [{
				"elementType" : "geometry",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"hue" : "#232a57"
				}]
			}, {
				"featureType" : "road.highway",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"hue" : "#0033ff"
				}, {
					"saturation" : 13
				}, {
					"lightness" : -77
				}]
			}, {
				"featureType" : "landscape",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"color" : "#4657ab"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#0d0a1f"
				}]
			}, {
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#d2cfe3"
				}]
			}, {
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#0d0a1f"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ffffff"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#0d0a1f"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#ff9910"
				}]
			}, {
				"featureType" : "road.local",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#4657ab"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#232a57"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#232a57"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}];
		
			// Papiro
			var old_paper_style = [{
				"elementType" : "geometry",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#f2e48c"
				}]
			}, {
				"featureType" : "road.highway",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "transit",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi.park",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"color" : "#d3d3d3"
				}, {
					"visibility" : "on"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "landscape",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#f2e48c"
				}]
			}, {
				"featureType" : "landscape",
				"elementType" : "geometry.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#592c00"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#a77637"
				}]
			}, {
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#592c00"
				}]
			}, {
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#f2e48c"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#592c00"
				}]
			}, {
				"featureType" : "administrative",
				"elementType" : "labels.text.stroke",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#f2e48c"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#a5630f"
				}]
			}, {
				"featureType" : "road.highway",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "on"
				}, {
					"color" : "#592c00"
				}]
			}, {
				"featureType" : "road",
				"elementType" : "labels.icon",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "water",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "geometry.fill",
				"stylers" : [{
					"visibility" : "off"
				}]
			}, {
				"featureType" : "poi",
				"elementType" : "labels",
				"stylers" : [{
					"visibility" : "off"
				}]
			}];
		
			// One color - Change the hue value for your desired color
			var mono_color_style = [{
				"stylers" : [{
					"hue" : "#ff00aa"
				}, {
					"saturation" : 1
				}, {
					"lightness" : 1
				}]
			}];
		
			/*
			 * Google Maps Initialize
			 */
		
		
			
		    $this = $("#map_canvas");
		    $zoom_level = ($this.data("gmap-zoom") || 5);
		    $data_lat = ($this.data("gmap-lat") || 4.8141558222999565);
		    $data_lng = ($this.data("gmap-lng") || -75.69966990350343);
		    $xml_src = ($this.data("gmap-src") || "xml/gmap/pins.xml");
		
		    var metroStyleMap = new google.maps.StyledMapType(metro_style, {
		        name: "Metro"
		    }),
		   
		    monoColorStyleMap = new google.maps.StyledMapType(mono_color_style, {
		        name: "One Color"
		    });
		
		    function demoLoadAttribute() {
		
		        var centerLatLng = new google.maps.LatLng($data_lat, $data_lng),
		        mapOptions = {
		            zoom: $zoom_level,
		            center: centerLatLng,
		            //disableDefaultUI: true,
		            //mapTypeId : google.maps.MapTypeId.ROADMAP
		            mapTypeControlOptions: {
		                mapTypeIds: [ 'metro_style'
		                ]
		            }
		        },
		
		        bounds = new google.maps.LatLngBounds(),
		        infowindow = new google.maps.InfoWindow(),
		        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			//var myLatlng = new google.maps.LatLng(4.8141558222999565,-75.69966990350343);
			var myLatlng = new google.maps.LatLng($data_lat,$data_lng);
			var marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    draggable:true,
			    title:"Drag me!"
			});
			google.maps.event.addListener(marker, 'dragend', function(){
        			setLatLng(marker);
   			 });

			
				
						
		    } // end demoLoadAttribute


		    function setLatLng(marker){
		    	var markerLatLng = marker.getPosition();
		    	document.getElementById("lat").value=markerLatLng.lat();
			document.getElementById("lng").value=markerLatLng.lng();
			geocodeLatLng(markerLatLng)
		    }
		    function geocodeLatLng(latlng) {
			var geocoder = new google.maps.Geocoder;
			geocoder.geocode({'location': latlng}, function(results, status) {
			  if (status === 'OK') {
			    if (results[0]) {
			      document.getElementById("address").value=results[0].formatted_address;
			    } else {
			      window.alert('No results found');
			    }
			  } else {
			    window.alert('Geocoder failed due to: ' + status);
			  }
			});
		      }

		
		    
		
		 
		
		
		    demoLoadAttribute();

				
		};
					
		
		//------------------------------------------------------------------------------------------------------------------
		$.mockjaxSettings.responseTime = 500;

		    $.mockjax({
			url: '/post',
			response: function (settings) {
			    log(settings, this);
			}
		    });

		    $.mockjax({
			url: '/error',
			status: 400,
			statusText: 'Bad Request',
			response: function (settings) {
			    this.responseText = 'Please input correct value';
			    log(settings, this);
			}
		    });

		    $.mockjax({
			url: '/status',
			status: 500,
			response: function (settings) {
			    this.responseText = 'Internal Server Error';
			    log(settings, this);
			}
		    });

		$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
				_title : function(title) {
					if (!this.options.title) {
						title.html("&#160;");
					} else {
						title.html(this.options.title);
					}
				}
			}));

		$('.popup-with-form').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#name',

			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function() {
					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
				}
			}
		});

		$("#enable").click( function(){
			//alert("entro");
			$("#dialog_simple").dialog("open");
			return false;
		});

		$('#user .editable').on('hidden', function (e, reason) {
			if (reason === 'save' || reason === 'nochange') {
			    var $next = $(this).closest('tr').next().find('.editable');
			    if ($('#autoopen').is(':checked')) {
				setTimeout(function () {
				    $next.editable('show');
				}, 300);
			    } else {
				$next.focus();
			    }
			}
		    });	
		
		$('#descripcion').click(function(){
		    //alert("oee");
		    //event.stopPropagation();
		    //$(this).removeClass("popup-with-form");
		    return false;
		    //alert("oee");
		});
		
		/*$('#largo').click(function(event){
		    //alert("oee");
		    event.stopImmediatePropagation();
		    $(this).removeClass("popup-with-form");
		    
		    //alert("oee");
		});*/
		 	
		$("#btn").click(function(){
			
		
		});
		 
		$("#smart-mod-eg1").click(function(e) {
			$.SmartMessageBox({
				title : "Eliminar!",
				content : "Esta seguro que desea eliminar el sitio?",
				buttons : '[No][Si]'
			}, function(ButtonPressed) {
				if (ButtonPressed === "Si") {

					$.smallBox({
						title : "Eliminar",
						content : "<i class='fa fa-clock-o'></i> <i>Se elimino satisfactoriamente</i>",
						color : "#659265",
						iconSmall : "fa fa-check fa-2x fadeInRight animated",
						timeout : 4000
					});
				}
				if (ButtonPressed === "No") {
					$.smallBox({
						title : "Eliminar",
						content : "<i class='fa fa-clock-o'></i> <i>No se elimino el sitio</i>",
						color : "#C46A69",
						iconSmall : "fa fa-times fa-2x fadeInRight animated",
						timeout : 4000
					});
				}

			});
			e.preventDefault();
		});
		


		$(window).unbind('gMapsLoaded');
		$(window).bind('gMapsLoaded', pagefunction);
		window.loadGoogleMaps();
		pageSetUp();

	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
