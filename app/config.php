<?php
if ( ! strcasecmp( basename( $_SERVER['SCRIPT_NAME'] ), basename( __FILE__ ) ) ) {
	die( '
Access not allowed!' );
}
require_once __DIR__."/functions.php";
$apiKey = "YOUR_API_KEY_HERE"; //Get Key on site https://newsapi.org/
$link   = "https://newsapi.org/v2/top-headlines?country=br&apiKey=$apiKey";