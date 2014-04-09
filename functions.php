<?php

	function dbConnect($DBName)
	{
		$DBServer = 'localhost';
		$DBUser = 'root';
		$DBPass = '';
		
		$mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);	
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		return $mysqli;
	}
	
	function dbRegisterwrite($username, $mail, $encrpw)
	{
		$DBName = "denngur";
		$mysqli = dbConnect($DBName);
		
		$stmt = $mysqli->prepare("SELECT * FROM user WHERE `username`=?");
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$stmt->store_result();
		if($stmt->num_rows >=1)
		{
			echo"Der Name ist bereits in Verwendung!";
		}
		
 		else
		{
			$stmt = $mysqli->prepare("INSERT INTO user (`username`, `password`, `mail`) VALUES (?, ?, ?)");
			if ( !$stmt ) {
				printf('errno: %d, error: %s', $mysqli->errno, $mysqli->error);
					die;
			}	
			$stmt->bind_param('sss', $username, $encrpw, $mail);
			$result = $stmt->execute();
			echo "Danke f&uumlr ihre Registrierung :) \o/";
		}
	}	
?>
 