<?php
	include 'functions.php';
	if(isset($_SESSION['userid']))
	{
		$name = $_SESSION['username'];
		echo "Wilkommen $name";
	}
	
	else
	{
		if (isset($_POST["username"]) AND isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$value = CheckLogin($username, $password);
			if($value == 1)
			{
				$name = $_SESSION['username'];
				echo "Wilkommen $name";
			}
			else
			{
				echo ("Falscher Benutzername oder Passwort");
			}
		}
		else{
			$url = $_SERVER['REQUEST_URI'];
			echo "<form action='$url' autocomplete='on' method='post'>";
			echo "Benutzername:<input type='text' name='username'>";
			echo "Passwort: <input type='password'	name='password'>";
			echo "<input type='submit'>";
			echo "</form>";
		}
	}
?>