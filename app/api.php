<?php
if ( ! strcasecmp( basename( $_SERVER['SCRIPT_NAME'] ), basename( __FILE__ ) ) ) {
	die( '
Access not allowed!' );
}
session_start();
require_once __DIR__ . "/config.php";
$news  = file_get_contents( $link );
$datanews = json_decode( $news );