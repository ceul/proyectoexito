<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "GMap Skins";

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

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		//$breadcrumbs[$page_nav["cool"]["title"]] = "";
		//include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">


		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->

			<div class="row">
					<!-- NEW WIDGET START -->
					<article class="col-xs-20 col-sm-12 col-md-12 col-lg-15">
						<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
						
						<div>

							<!-- widget content -->
							<div class="widget-body no-padding">
								<div id="map_canvas" class="google_maps" gmap-data-lat="29.895883" data-gmap-lng="-75.69966990350343" data-gmap-zoom="5" data-gmap-src="xml/gmap/pins.xml">
									&nbsp;

								</div>
							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->
							<div class="well">
								<div class="input-group" style="padding:10px;">
									<input class="form-control" placeholder="Search..." type="text">
									<div class="input-group-btn padding">
										<button class="btn btn-default btn-primary" type="button">
											<i class="fa fa-search"></i> Search
										</button>
									</div>
								</div>
								

							</div>
			
						</div>

					</div>
					<!-- end widget -->
					</article>
					<!-- WIDGET END -->
			</div>

		</section>
		<!-- end widget grid -->

		<div class="col-md-1 hidden-xs">
			<button id="grid"class="btn btn-default" type="button" id="tree">
				<i class="glyphicon glyphicon-th"></i>
			</button>		
		</div>
		<div class="col-md-1 hidden-xs">
			<button class="btn btn-default" type="button" id="list">
				<i class="glyphicon glyphicon-list"></i>
			</button>		
		</div>
		<div class="col-md-1 col-md-offset-9 ">
			<button class="btn btn-default" type="button" data-original-title="Añadir nuevo sitio" onclick="location.href='addsite.php'">
				<i class="glyphicon glyphicon-plus" ></i>
			</button>		
		</div>
		<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/3.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 hot">
											HOT
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="products-detail.php">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$399</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>			

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/4.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$19</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
									<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/5.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$195</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/7.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$99</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
									<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/8.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$109</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/9.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$399</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum</p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				<div class="row">
				</div>
		<div style="padding:3px;">.</div>
		

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
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
<script src="..."></script>-->

<script type="text/javascript">
	
	$(document).ready(function() {	
		var pagefunction = function() {
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
		
		    var greyStyleMap = new google.maps.StyledMapType(greyscale_style, {
		        name: "Greyscale"
		    }),
		    monoChromeStyleMap = new google.maps.StyledMapType(monochrome_style, {
		        name: "Mono Chrome"
		    }),
		    metroStyleMap = new google.maps.StyledMapType(metro_style, {
		        name: "Metro"
		    }),
		    nightvisionStyleMap = new google.maps.StyledMapType(nightvision_style, {
		        name: "Nightvision"
		    }),
		    nvisionhstyleMap = new google.maps.StyledMapType(nightvision_highlight_style, {
		        name: "Nightvision Light"
		    }),
		    oPaperStyleMap = new google.maps.StyledMapType(old_paper_style, {
		        name: "Old Paper"
		    }),
		    colorfulStyleMap = new google.maps.StyledMapType(colorful_style, {
		        name: "Colorful"
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
		                mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'colorful_style', 'greyscale_style',
		                    'monochrome_style', 'metro_style', 'nightvision_style', 'nightvision_highlight_style',
		                    'old_paper_style', 'mono_color_style'
		                ]
		            }
		        },
		
		        bounds = new google.maps.LatLngBounds(),
		        infowindow = new google.maps.InfoWindow(),
		        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		
		        /*map.mapTypes.set('colorful_style', colorfulStyleMap);
		        map.mapTypes.set('greyscale_style', greyStyleMap);
		        map.mapTypes.set('monochrome_style', monoChromeStyleMap);
		        */map.mapTypes.set('metro_style', metroStyleMap);
		        /*map.mapTypes.set('nightvision_style', nightvisionStyleMap);
		        map.mapTypes.set('nightvision_highlight_style', nvisionhstyleMap);
		        map.mapTypes.set('old_paper_style', oPaperStyleMap);
		        map.mapTypes.set('mono_color_style', monoColorStyleMap);
			*/
		        //map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
		        //map.setMapTypeId('metro_style');
		
					$.get($xml_src, function(data) {
			
				        // create the Bounds object
				        var bounds = new google.maps.LatLngBounds();
				        
						$(data).find("marker").each(function(){
				
							var eachMarker = jQuery(this),
								// grab the address from XML
								theAddress = eachMarker.find("address").text(),
								mygc = new google.maps.Geocoder(theAddress);
								
								mygc.geocode({'address' : theAddress}, function(results, status) {
				
									var mLat = results[0].geometry.location.lat(),
										Long = results[0].geometry.location.lng(),
					
										marker = new google.maps.Marker({
										position : new google.maps.LatLng(mLat, Long),
										map : map,
										icon : ('img/' + eachMarker.find("icons").text() + '.png'),
										scrollwheel : false,
										streetViewControl : true,
										title : eachMarker.find("name").text()
								}),
						        
								link = "link";
								
								google.maps.event.addListener(marker, 'click', function() {// click
									// Setting the content of the InfoWindow
									var contentString = '<div id="info-map" style="width:300px; height:85px; padding:0px;"><div>' + '<div style="display:inline-block; width:86px; verticle-align:top; float:left;"><img src=' + eachMarker.find("image").text() + ' class="thumbnail" style="width:80%; verticle-align:top;" /></div>' + '<div style="display:inline-block; width:200px; float:left;"><h4>' + eachMarker.find("name").text() + '</h4><b>' + eachMarker.find("address").text() + '</b><br/>' + '<p><a href="' + eachMarker.find("link").text() + '" class="btn btn-xs btn-default pull-right"><i class="fa fa-fw fa-map-marker"></i>More Info</a></p>' + '</div></div></div>';
									infowindow.setContent(contentString);
									infowindow.open(map, marker);
				
									google.maps.event.addListener(map, 'click', function() {
										infowindow.close()
										})
									});
				
								});// end geocode
					
						});// end find marker loop
					
				});	// end get data
				
						
		    } // end demoLoadAttribute
		
		    // grey
		    function generate_map_1() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('greyscale_style', greyStyleMap);
		        map.setMapTypeId('greyscale_style');
		
		    }
		
		    // colorful
		    function generate_map_2() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas2'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('colorful_style', colorfulStyleMap);
		        map.setMapTypeId('colorful_style');
		
		    }
		
		    // colorful
		    function generate_map_3() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas3'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('nightvision_style', nvisionhstyleMap);
		        map.setMapTypeId('nightvision_style');
		
		    }
		
		    // Night Light
		    function generate_map_4() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas4'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('nightvision_highlight_style', nvisionhstyleMap);
		        map.setMapTypeId('nightvision_highlight_style');
		
		    }
		
		    // Paper Style
		    function generate_map_5() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas5'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('old_paper_style', oPaperStyleMap);
		        map.setMapTypeId('old_paper_style');
		
		    }
		
		    // One Color Style
		    function generate_map_6() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas6'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('mono_color_style', monoColorStyleMap);
		        map.setMapTypeId('mono_color_style');
		
		    }
		
		    // Monochrome Style
		    function generate_map_8() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas8'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('monochrome_style', monoChromeStyleMap);
		        map.setMapTypeId('monochrome_style');
		
		    }
		
		    // Metro Style
		    function generate_map_7() {
		
		        var mapOptions = {
		            center: new google.maps.LatLng(41.38155, 2.13752),
		            zoom: 12,
		        };
		        map = new google.maps.Map(document.getElementById('map_canvas7'), mapOptions);
		
		        // Setup skin for the map
		        map.mapTypes.set('metro_style', metroStyleMap);
		        map.setMapTypeId('metro_style');
		
		    }
		    
		
		    demoLoadAttribute();
		    generate_map_1();
		    generate_map_2();
		    generate_map_3();
		    generate_map_4();
		    generate_map_5();
		    generate_map_6();
		    generate_map_7();
		    generate_map_8();
		
				
		};
		

					
		$(window).unbind('gMapsLoaded');
		$(window).bind('gMapsLoaded', pagefunction);
		window.loadGoogleMaps();
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
