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
<a href="form-x-editable.html#" id="descripcion" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Descripcion">Ventana ubicada en el centro de santa rosa de cabal, con alta concurrencia de personas en el dia y en la noche debido a estar dentro de la zona comercial del municipio. </a>
										</div>
										<div class="tab-pane fade" id="specifications">
											<br>
											<dl class="">
													<dt>Largo</dt>
			                                        <dd href="form-x-editable.html#" id="largo" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Largo">1.2 mts</dd>
			                                        <br>

			                                        <dt>Ancho</dt>
			                                        <dd href="form-x-editable.html#" id="ancho" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Ancho">2 mts</dd>
			                                        
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
										
											<button class="btn btn btn-warning btn-lg " id="enable">Modificar</button>
										
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
<script type="text/javascript">


	$(document).ready(function() {
		
		/* DO NOT REMOVE : GLOBAL FUNCTIONS!
		 *
		 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
		 *
		 * // activate tooltips
		 * $("[rel=tooltip]").tooltip();
		 *
		 * // activate popovers
		 * $("[rel=popover]").popover();
		 *
		 * // activate popovers with hover states
		 * $("[rel=popover-hover]").popover({ trigger: "hover" });
		 *
		 * // activate inline charts
		 * runAllCharts();
		 *
		 * // setup widgets
		 * setup_widgets_desktop();
		 *
		 * // run form elements
		 * runAllForms();
		 *
		 ********************************
		 *
		 * pageSetUp() is needed whenever you load a page.
		 * It initializes and checks for all basic elements of the page
		 * and makes rendering easier.
		 *
		 */
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
		/*$('#enable').click(function () {
			$('#user .editable').editable('toggleDisabled');
		    });*/
		
		
		// modal dialog init: custom buttons and a "close" callback reseting the form inside
			var dialog = $("#addtab").dialog({
				autoOpen : false,
				width : 600,
				resizable : false,
				modal : true,
				buttons : [{
					html : "<i class='fa fa-times'></i>&nbsp; Cancel",
					"class" : "btn btn-default",
					click : function() {
						$(this).dialog("close");
		
					}
				}, {
		
					html : "<i class='fa fa-plus'></i>&nbsp; Add",
					"class" : "btn btn-danger",
					click : function() {
						addTab();
						$(this).dialog("close");
					}
				}]
			});
		
			// addTab form: calls addTab function on submit and closes the dialog
			var form = dialog.find("form").submit(function(event) {
				addTab();
				dialog.dialog("close");
				event.preventDefault();
			});
		
			// actual addTab function: adds new tab using the input from the form above
			function addTab() {
				var label = tabTitle.val() || "Tab " + tabCounter, id = "tabs-" + tabCounter, li = $(tabTemplate.replace(/#\{href\}/g, "#" + id).replace(/#\{label\}/g, label)), tabContentHtml = tabContent.val() || "Tab " + tabCounter + " content.";
		
				tabs.find(".ui-tabs-nav").append(li);
				tabs.append("<div id='" + id + "'><p>" + tabContentHtml + "</p></div>");
				tabs.tabs("refresh");
				tabCounter++;
		
				// clear fields
				$("#tab_title").val("");
				$("#tab_content").val("");
			}
		
			// addTab button: just opens the dialog
			$("#enable").button().click(function() {
				dialog.dialog("open");
			});

		/*$('#descripcion').editable("click",function(dialog){
			dialog.dialog("open");
		    });*/
		$('#largo').editable({
			
			type: 'text',
			pk: 1,
			name: 'largo',
			title: 'Ingrese el largo'
		    });

		$('#ancho').editable({
			type: 'text',
			pk: 1,
			name: 'ancho',
			title: 'Ingrese el a'
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

		 	
		
		 pageSetUp();
		 
		/*
		 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
		 * eg alert("my home function");
		 * 
		 * var pagefunction = function() {
		 *   ...
		 * }
		 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
		 * 
		 * TO LOAD A SCRIPT:
		 * var pagefunction = function (){ 
		 *  loadScript(".../plugin.js", run_after_loaded);	
		 * }
		 * 
		 * OR
		 * 
		 * loadScript(".../plugin.js", run_after_loaded);
		 */
		// With Callback
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
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
