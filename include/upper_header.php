<div id="upper_header">
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
		$url = $_SERVER['REQUEST_URI'];
		?> 
		Wilkommen <?php echo $name; ?> 
		<form action='<?php echo $url?>' autocomplete='on' method='post'>
      <input type='hidden' name='logout' value='1'/> 
      <input type='submit' value='Logout' />
		</form>
    <?php
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
			?> 
      <form action='<?php echo $url;?>' autocomplete='on' method='post'>
        <label>Benutzername:<input type='text' name='username' /></label>
        <label>Passwort:<input type='password'	name='password' /></label>
        <input type='submit' value='Login' />
			</form>
      <?php
		}
	}
?>
  <div style="clear: both;"></div>
</div>
<div id="logo">
	<img src="img/logo.png" />
</div>