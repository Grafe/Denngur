<a href="index.php">Startseite</a>
<a href="upload.php">Blid hochladen</a>
<?php
	if(!isset($_SESSION["userid"]))
	{
		echo ("<a href='register.php'>Registrieren</a>");
	}
	if(isset($_SESSION["userid"])){
		echo ("<a href='uploadalbum.php'>Album hochladen</a>");
	}
?>