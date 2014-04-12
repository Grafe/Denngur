<?php
	include 'functions.php';
	SESSION_START();
	
	if(isset($_POST["logout"]))
	{
		session_destroy();
		
	}
	if(isset($_SESSION["userid"]))
	{
		$name = $_SESSION['username'];
		echo "Wilkommen $name";
		$url = $_SERVER['REQUEST_URI'];
		echo "<form action='$url' autocomplete='on' method='post'>";
		echo "<input type='hidden' name='logout' value='1'/> ";
		echo "<input type='submit' value='Logout'>";
		echo "</form>";
	}
	else
	{
		if (isset($_POST["username"]) AND isset($_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$value = CheckLogin($username, $password);
				if($value == 1)
				{
					
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