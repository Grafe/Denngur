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
      <div id="dropbox">
				<span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
			</div>
		</div>
	</div>
	
	<!-- Including the HTML5 Uploader plugin -->
	<script src="js/filedrop/jquery.filedrop.js"></script>

	<!-- The main script file -->
	<script src="js/filedrop/script.js"></script>
</body>
</html>