<?php
session_start();
	// report all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// load the SureDone library
require_once ('includes/SureDone_Startup.php');

		$token =  isset($_SESSION['token'])?$_SESSION['token']:'';

echo "---- Testing Get All Options  ----<br>";

$result = SureDone_Store::get_all_options($token, isset($_SESSION['username'])?$_SESSION['username']:'');

print_r($result);


?>