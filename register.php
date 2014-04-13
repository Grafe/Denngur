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
			<form action="register_check.php" autocomplete="on" method="post">
					Benutzername:<input type="text" name="username"><br>
					E-Mail: <input type="email" name="mail"><br>
					Passwort: <input type="password" name="password"><br>
				<input type="submit" value="Absenden">
			</form>	
		</div>
	</div>
</body>
</html>