<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Add Site";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["addsite"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">


	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
	//	$breadcrumbs["Misc"] = "";
	//	include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">
		<div role="widget" class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
						
						
		
						<!-- widget div-->
						<div role="content">
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body no-padding">
		
								<form class="smart-form">
									<header>
										Añadir un nuevo sitio
									</header>
		
									<fieldset>
										
										<section>
											<label class="label">Descripcion</label>
											<label class="textarea"> 										
												<textarea rows="3" class="custom-scroll"></textarea> 
											</label>
											
										</section>
										<section>
											<label class="label">Categoria</label>
											<label class="select">
												<select>
													<option value="0">Ventana</option>
													<option value="1">Bus</option>
													<option value="2">Taxi</option>
													<option value="3">Valla publicitaria</option>
													<option value="4">Automovil</option>
												</select> <i></i> </label>
										</section>
		
										<section>
											<label class="label">Direccion</label>
											<label class="input">
												<input maxlength="10" type="text" id="address">
											</label>
										</section>
									
									</fieldset>
									
									<fieldset>
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
									<fieldset>
										<section class=>
											<label class="label">Telefono</label>
											<label class="input "> <i class="icon-prepend fa fa-phone"></i>
												<input class="valid" aria-invalid="false" aria-required="true" name="phone" placeholder="Telefono" data-mask="(999) 999-9999" type="tel"></input>
											</label>
										</section>
										<section>
											<label class="label">Email</label>
											<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
												<input name="email" placeholder="E-mail" type="email">
											</label>
										</section>
									</fieldset>
									<fieldset>
										<section>
											<label class="label">Imagenes</label>
												<form action="upload.php" class="dropzone" id="mydropzone"></form>
												<div>

													<!-- widget edit box -->
													<div class="jarviswidget-editbox">
														<!-- This area used as dropdown edit box -->
													</div>
													<div class="widget-body">
														<form action="upload.php" class="dropzone" id="mydropzone"></form>
													</div>
														<!-- end widget content -->

												</div>
												<!-- end widget div -->
												<div class="note">
													<strong>Nota:</strong> Agregue imagenes del sitio
												</div>
										</section>
	
										<section>
											<div class="checkbox">
												<label>  
												<input type="checkbox" name="terms" id="terms">
													<i></i>Estoy de acuerdo con los<a href="#" data-toggle="modal" data-target="#myModal"> Terminos y condiciones </a>												</label>
											</div>
										</section>
										<!--NO SE PORQUE NO FUNCIONA DEBAJO DEL FORM-->
										<footer>
											<button type="submit" class="btn btn-primary">
												Aceptar
											</button>
											<button type="button" class="btn btn-default" onclick="window.history.back();">
												Atras
											</button>
										</footer>
									</fieldset>
									
								</form>
	
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>	
	</div>
	<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
					</div>
					<div class="modal-body custom-scroll terms-body">
						
 <div id="left">



            <h1>SMARTADMIN TERMS & CONDITIONS TEMPLATE</h1>



            <h2>Introduction</h2>

            <p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>

            <p>[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]</p>


            <h2>License to use website</h2>
            <p>Unless otherwise stated, [NAME] and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.</p>

            <p>You may view, download for caching purposes only, and print pages [or [OTHER CONTENT]] from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>

            <p>You must not:</p>
            <ul>
                <li>republish material from this website (including republication on another website);</li>
                <li>sell, rent or sub-license material from the website;</li>
                <li>show any material from the website in public;</li>
                <li>reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;]</li>
                <li>[edit or otherwise modify any material on the website; or]</li>
                <li>[redistribute material from this website [except for content specifically and expressly made available for redistribution].]</li>
            </ul>
            <p>[Where content is specifically made available for redistribution, it may only be redistributed [within your organisation].]</p>

            <h2>Acceptable use</h2>

            <p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>

            <p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>

            <p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without [NAME'S] express written consent.</p>

            <p>[You must not use this website to transmit or send unsolicited commercial communications.]</p>

            <p>[You must not use this website for any purposes related to marketing without [NAME'S] express written consent.]</p>

            <h2>[Restricted access</h2>

            <p>[Access to certain areas of this website is restricted.]  [NAME] reserves the right to restrict access to [other] areas of this website, or indeed this entire website, at [NAME'S] discretion.</p>

            <p>If [NAME] provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>

            <p>[[NAME] may disable your user ID and password in [NAME'S] sole discretion without notice or explanation.]</p>

            <h2>[User content</h2>

            <p>In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.</p>

            <p>You grant to [NAME] a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media.  You also grant to [NAME] the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>

            <p>Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or [NAME] or a third party (in each case under any applicable law).</p>

            <p>You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.</p>

            <p>[NAME] reserves the right to edit or remove any material submitted to this website, or stored on [NAME'S] servers, or hosted or published upon this website.</p>

            <p>[Notwithstanding [NAME'S] rights under these terms and conditions in relation to user content, [NAME] does not undertake to monitor the submission of such content to, or the publication of such content on, this website.]</p>

            <h2>No warranties</h2>

            <p>This website is provided “as is” without any representations or warranties, express or implied.  [NAME] makes no representations or warranties in relation to this website or the information and materials provided on this website.</p>

            <p>Without prejudice to the generality of the foregoing paragraph, [NAME] does not warrant that:</p>
            <ul>
                <li>this website will be constantly available, or available at all; or</li>
                <li>the information on this website is complete, true, accurate or non-misleading.</li>
            </ul>
            <p>Nothing on this website constitutes, or is meant to constitute, advice of any kind.  [If you require advice in relation to any [legal, financial or medical] matter you should consult an appropriate professional.]</p>

            <h2>Limitations of liability</h2>

            <p>[NAME] will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:</p>
            <ul>
                <li>[to the extent that the website is provided free-of-charge, for any direct loss;]</li>
                <li>for any indirect, special or consequential loss; or</li>
                <li>for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</li>
            </ul>
            <p>These limitations of liability apply even if [NAME] has been expressly advised of the potential loss.</p>

            <h2>Exceptions</h2>

            <p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit [NAME'S] liability in respect of any:</p>
            <ul>
                <li>death or personal injury caused by [NAME'S] negligence;</li>
                <li>fraud or fraudulent misrepresentation on the part of [NAME]; or</li>
                <li>matter which it would be illegal or unlawful for [NAME] to exclude or limit, or to attempt or purport to exclude or limit, its liability.</li>
            </ul>
            <h2>Reasonableness</h2>

            <p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.</p>

            <p>If you do not think they are reasonable, you must not use this website.</p>

            <h2>Other parties</h2>

            <p>[You accept that, as a limited liability entity, [NAME] has an interest in limiting the personal liability of its officers and employees.  You agree that you will not bring any claim personally against [NAME'S] officers or employees in respect of any losses you suffer in connection with the website.]</p>

            <p>[Without prejudice to the foregoing paragraph,] you agree that the limitations of warranties and liability set out in this website disclaimer will protect [NAME'S] officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as [NAME].</p>

            <h2>Unenforceable provisions</h2>

            <p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

            <h2>Indemnity</h2>

            <p>You hereby indemnify [NAME] and undertake to keep [NAME] indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by [NAME] to a third party in settlement of a claim or dispute on the advice of [NAME'S] legal advisers) incurred or suffered by [NAME] arising out of any breach by you of any provision of these terms and conditions[, or arising out of any claim that you have breached any provision of these terms and conditions].</p>

            <h2>Breaches of these terms and conditions</h2>

            <p>Without prejudice to [NAME'S] other rights under these terms and conditions, if you breach these terms and conditions in any way, [NAME] may take such action as [NAME] deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.</p>

            <h2>Variation</h2>

            <p>[NAME] may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.</p>

            <h2>Assignment</h2>

            <p>[NAME] may transfer, sub-contract or otherwise deal with [NAME'S] rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.</p>

            <p>You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.</p>

            <h2>Severability</h2>

            <p>If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.</p>

            <h2>Entire agreement</h2>

            <p>These terms and conditions [, together with [DOCUMENTS],] constitute the entire agreement between you and [NAME] in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.</p>

            <h2>Law and jurisdiction</h2>

            <p>These terms and conditions will be governed by and construed in accordance with [GOVERNING LAW], and any disputes relating to these terms and conditions will be subject to the [non-]exclusive jurisdiction of the courts of [JURISDICTION].</p>

<h2>About these website terms and conditions</h2><p>We created these website terms and conditions with the help of a free website terms and conditions form developed by Contractology and available at <a href="http://www.SmartAdmin.com">www.SmartAdmin.com</a>.
Contractology supply a wide variety of commercial legal documents, such as <a href="#">template data protection statements</a>.
</p>
            <h2>[Registrations and authorisations</h2>

            <p>[[NAME] is registered with [TRADE REGISTER].  You can find the online version of the register at [URL].  [NAME'S] registration number is [NUMBER].]</p>

            <p>[[NAME] is subject to [AUTHORISATION SCHEME], which is supervised by [SUPERVISORY AUTHORITY].]</p>

            <p>[[NAME] is registered with [PROFESSIONAL BODY].  [NAME'S] professional title is [TITLE] and it has been granted in [JURISDICTION].  [NAME] is subject to the [RULES] which can be found at [URL].]</p>

            <p>[[NAME] subscribes to the following code[s] of conduct: [CODE(S) OF CONDUCT].  [These codes/this code] can be consulted electronically at [URL(S)].</p>

            <p>[[NAME'S] [TAX] number is [NUMBER].]]</p>

            <h2>[NAME'S] details</h2>

            <p>The full name of [NAME] is [FULL NAME].</p>

            <p>[[NAME] is registered in [JURISDICTION] under registration number [NUMBER].]</p>

            <p>[NAME'S] [registered] address is [ADDRESS].</p>

            <p>You can contact [NAME] by email to [EMAIL].</p>

           

            </div>
			
			<br><br>

            <p><strong>By using this  WEBSITE TERMS AND CONDITIONS template document, you agree to the 
	 <a href="#">terms and conditions</a> set out on 
	 <a href="#">SmartAdmin.com</a>.  You must retain the credit 
	 set out in the section headed "ABOUT THESE WEBSITE TERMS AND CONDITIONS".  Subject to the licensing restrictions, you should 
	 edit the document, adapting it to the requirements of your jurisdiction, your business and your 
	 website.  If you are not a lawyer, we recommend that you take professional legal advice in relation to the editing and 
	 use of the template.</strong></p>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-primary" id="i-agree">
							<i class="fa fa-check"></i> I Agree
						</button>
						
						<button type="button" class="btn btn-danger pull-left" id="print">
							<i class="fa fa-print"></i> Print
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
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
<script src="<?php echo ASSETS_URL; ?>/js/plugin/dropzone/dropzone.min.js"></script>
<script>
	$("#i-agree").click(function(){
		$this=$("#terms");
		if($this.checked) {
			$('#myModal').modal('toggle');
		} else {
			$this.prop('checked', true);
			$('#myModal').modal('toggle');
		}
	});

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
