<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Invoice";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ganancia"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

	<!-- MAIN CONTENT -->
	<div id="content">

		<!-- widget grid -->
		<section id="widget-grid" class="">
		
			<!-- row -->
			<div class="row">
		
				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
						<!-- widget div-->
						<div>
							<!-- widget content -->
							<div class="widget-body no-padding">
		
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="col-lg-3 col-md-3 col-sm-2 col-xs-2">ESPACIO</th>
												<th>DIRECCION</th>
												<th>FECHA</th>
												<th class="hidden-xs">INSTALADOR</th>
												<th class="hidden-xs">ARRENDATARIO</th>
												<th>PRICE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td>
													<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
														<div class="product-image"> 
															<img src="img/demo/e-comm/8.png" alt="194x228" class="img-responsive"> 
		
														</div>
													</div>

													<!--<div>Ventana ubicada en el centro de la ciudad de santa rosa de cabal, con alto flujo de personas ya que esta en el area comercial de esta. </div>-->
												</td>
												<td>Carrera 14 # 14-62</td>
												<td>01-03-2015 / 29-02-2016</td>
												<td class="hidden-xs">Publicidad x</td>
												<td class="hidden-xs">Andres Mauricio</td>
		 
												<td>$1,300.00</td>
											</tr>
											<tr>
												
												<td>
													<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
														<div class="product-image"> 
															<img src="img/demo/e-comm/8.png" alt="194x228" class="img-responsive"> 
		
														</div>
													</div>

													<!--<div>Ventana ubicada en el centro de la ciudad de santa rosa de cabal, con alto flujo de personas ya que esta en el area comercial de esta. </div>-->
												</td>
												<td>Carrera 14 # 14-62</td>
												<td>01-03-2015 / 29-02-2016</td>
												<td class="hidden-xs">Publicidad x</td>
												<td class="hidden-xs">Andres Mauricio</td>
		 
												<td>$1,300.00</td>
											</tr>
											
											<tr>
												
												<td>
													<div href="products-detail.php" class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
														<div class="product-image"> 
															<img src="img/demo/e-comm/8.png" alt="194x228" class="img-responsive"> 
		
														</div>
													</div>

													<!--<div>Ventana ubicada en el centro de la ciudad de santa rosa de cabal, con alto flujo de personas ya que esta en el area comercial de esta. </div>-->
												</td>
												<td>Carrera 14 # 14-62</td>
												<td>01-03-2015 / 29-02-2016</td>
												<td class="hidden-xs">Publicidad x</td>
												<td class="hidden-xs">Andres Mauricio</td>
		 
												<td>$1,300.00</td>
											</tr>
											
											
											
											
											<tr>
												<!--el colspan causa conflistos a la hora de volver responsive la pagina -->
												<td colspan="5">Total</td>
												<td><strong>$4,400.00</strong></td>
											</tr>
										
										</tbody>
									</table>
		
									
								</div>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
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
<script src="..."></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>
