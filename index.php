﻿<?php
	$pageTitle = 'Title Here';
	$pageDescription = 'Page description here';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $pageDescription; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="css/main.css?v=<?php echo filemtime( 'assets/css/main.css' ) ?>" rel="stylesheet" type="text/css" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

	<!-- Facebook -->
	<meta property=”og:title” content=<?php echo $pageTitle; ?>>
	<meta property=”og:type” content=”website”>
	<meta property=”og:image” content=<?php echo "http://$_SERVER[HTTP_HOST]/social.png"; ?>>
	<meta property=”og:url” content=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>>
	<meta property=”og:description” content=<?php echo $pageDescription; ?>>
	
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content=<?php echo $pageTitle; ?>>
	<meta name="twitter:description" content=<?php echo $pageDescription; ?>>
	<meta name="twitter:image:src" content=<?php echo "http://$_SERVER[HTTP_HOST]/social.png"; ?>>	
	<meta name="twitter:url" content=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>>
	
	<script>
	  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	  s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</head>
<body>
	<div id="page-wrap">
		<header id="header">
			<nav id="main-nav">
			
			</nav>
		</header>
		<article id="main-content">
			<section>
			
			</section>
		</article>
		<aside id="sidebar">
			
			
		</aside>
		<footer id="footer">
			
		</footer>
	</div>
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	<script defer type="text/javascript" src="js/scripts.js?v=<?php echo filemtime( 'assets/js/main-min.js' ) ?>"></script>
</body>

</html>