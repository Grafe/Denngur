<div id="upper_header">
<meta charset="utf-8">
<title>Denngur - Einfach Bilder teilen!</title>
<link href="css/humanity/jquery-ui-1.10.4.custom.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<?php
	include 'functions.php';
	$url = $_SERVER['REQUEST_URI'];
	SESSION_START();
	
	if(isset($_POST["logout"]))
	{
		session_destroy();
		echo ("<meta http-equiv='refresh' content='0; url=$url' />");

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
					echo ("<meta http-equiv='refresh' content='0; url=$url' />");
				}
				else
				{
					echo ("Falscher Benutzername oder Passwort");
				}
		}
		else{
			echo "<form action='$url' autocomplete='on' method='post'>";
			echo "Benutzername:<input type='text' name='username'>";
			echo "Passwort: <input type='password'	name='password'>";
			echo "<input type='submit'>";
			echo "</form>";
		}
	}

?>
</div>