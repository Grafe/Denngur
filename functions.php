<?php

	function dbConnect()
	{
		$DBServer = 'localhost';
		$DBUser = 'root';
		$DBPass = '';
		$DBName = "denngur";

		
		$mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);	
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		return $mysqli;
	}
	
	function dbRegisterwrite($username, $mail, $encrpw)
	{
		$mysqli = dbConnect();
		
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
		mysqli_close($mysqli);
	}	
	
	function CheckLogin($username, $password)
	{
		$mysqli = dbConnect();
		$encrpw = hash("sha512", $password);
		$stmt = $mysqli->prepare("SELECT userID, username FROM user WHERE username LIKE ? AND password = ? LIMIT 1");
		$stmt->bind_param('ss', $username, $encrpw);
		$stmt->execute();
		
        $result = $stmt->get_result();
		
		if($result->num_rows){
			$user = $result->fetch_array(MYSQLI_ASSOC);
			$_SESSION['userid'] = $user["userID"];
			$_SESSION['username'] = $user["username"];

			return "1";
		}
       
		return "0";
	}
	
	
	function logout()
	{
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
 