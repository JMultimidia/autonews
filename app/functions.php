<?php
$lang = "en";
$bandeira = "<a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\"><img src=\"assets/images/flags/en.gif\" alt=\"English\"></a>";
if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	$bandeira = "<a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\"><img src=\"assets/images/flags/".$lang.".gif\" alt=\"\"></a>";
}
require_once("languages/".$lang.".php");
function dateExtract($data){
	$data = strtotime( $data );
	$data = date("d/m/Y à\s\ H:i", $data);
	return $data;
}