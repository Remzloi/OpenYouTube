<?php
	include "config.php"
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<title><?php echo "$instancename"?></title>
	</head>
	<body>
		<div id="yt-masthead-container" class="yt-grid-box">
			<div id="yt-masthead">
				<a href="index.php" id="logo-container" alt="<?php echo "$instancename"?> home">
					<img id="logo" src="<?php echo "$instancelogo"?>" alt="<?php echo "$instancename"?> home">
				</a>
				<div id="yt-masthead-signin">
					<button type="button" class=" yt-uix-button yt-uix-button-primary" onclick=";window.location.href=this.getAttribute('href');return false;" href="https://example.com" role="button">
						<span class="yt-uix-button-content">Sign in 
  						</span>
					</button>
				</div>
			</div>
		</div>
		<div id="footer-container">
			<p>OpenYouTube Pre-Alpha by RemZloev</p>
			<p>Instance by <?php echo "$instanceadmin"?></p>
		</div>
	</body>
</html>
