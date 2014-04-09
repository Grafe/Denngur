<?php
	include 'functions.php';
	$username = $_POST["username"];
	$mail = $_POST["mail"];
	$password = $_POST["password"];
	$encrpw = hash("sha512", $password);
	
	if($username != '' AND $mail != '' AND $password != '')
	{
		dbRegisterwrite($username, $mail, $encrpw);
	}

	else
	{
		echo "Bitte f&uumlllen Sie alle Felder aus.";
	}
?>