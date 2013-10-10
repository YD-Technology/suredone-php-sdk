<?php
session_start();
	// report all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// load the SureDone library
require_once ('includes/SureDone_Startup.php');

// if Authentication option is selected
// start - Authentication

        echo "---- Testing Authentication ----<br>";
		$rbody = SureDone_Store::authenticate($_REQUEST['username'], $_REQUEST['password']);
		$responseObj = json_decode($rbody);
		if (isset($responseObj->token)) {
		$token = $responseObj->token;
		$_SESSION['username'] = $_REQUEST['username'];
		$_SESSION['token'] = $token;

        echo (isset($token) ? "Authentication successful" : "" ) . "<br>" . "token:" . $token . "<br>";
		} else {
			echo "Invalid username or password.";
		}

	?>