<?php 
date_default_timezone_set("Asia/Bangkok");
error_reporting(E_ALL & ~E_NOTICE);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

$path = "";
if (empty($path)){
	$url = "http://" . $_SERVER['SERVER_NAME'];
}else{
	$url = "http://" . $_SERVER['SERVER_NAME'].'/'.$path;
}

$time = date("h:i:s");


$line = "http://line.me/ti/p/~@";

?>