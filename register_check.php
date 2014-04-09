<?php
	include 'functions.php';
	$username = $_POST["username"];
	$mail = $_POST["mail"];
	$password = $_POST["password"];
	$encrpw = hash("sha512", $password);
	
	if($username != '' AND $mail != '' AND $password != '')
	{
		dbRegisterwrite($username, $mail, $encrpw);
		echo "Danke f&uumlr ihre Registrierung :) \o/";
	}
	
	else
	{
		echo "Bitte f&uumlllen Sie alle Felder aus.";
	}
?>