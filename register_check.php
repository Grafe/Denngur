<html>
<head>
 <?php
	include 'include/header.php';
 ?>
</head>
<body>
	<?php include 'include/upper_header.php';?>
	<div id="wrapper">
			<div id="menu">
				 <?php include 'include/menu.php';?>
			</div>
		<div id="content">
<?php
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
		</div>
	</div>
</body>
</html>