<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"gmap"=> array(
		"title"=>"Inicio",
		"url"=>APP_URL."/index.php"
	),
	"addsite" => array(
		"title"=> "Añadir nuevo sitio",
		"url"=>APP_URL."/addsite.php"
	),
	"ganancia" => array(
		"title"=> "Mis Ganancias",
		"url"=>APP_URL."/ganancia.php"
	),
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>
