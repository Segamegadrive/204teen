<?php
	session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Welcome to 204teen Production</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta charset="windows-1252">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script> 
	<script type="text/javascript" src = "js/date_time.js"></script>
	<script type="text/javascript" src = "js/flip_panel.js"></script>
	<script type="text/javascript" src="jquery-1.9.1.js"></script>

	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55941914-1', 'auto');
  ga('send', 'pageview');

</script>
	<?php include_once("header.php"); ?>
	<div class = "about_1" style = "background-image: url(images/misty2.jpg); background-repeat:no-repeat; background-size: 100%;">
			<h1>&#8216;Us.&#8217;</h1>
			<p>145-157 St John St, London, EC1V 4PW, UK.</p><br>
			<p>+44 7588586836</p>
			<p>rs204teen@gmail.com - <a href = "contact.php">Contact Form</a></p>
	</div>
	<div id = "content-for-photo">
		<div class = "about_2">About Us</div>
		<div class = "about_arrow">&#x21e3;</div>
		<div class = "about_3">Here's our intro.</div>
		<div class = "about_4">
			<p>204teen is creative and emerging production company established in 2014, based in London.</p><br>
			<p>204teen is just not a creative company accelerating to be the best but also aspires to give
you a  family feels and thrills and of-course a journey that we promise to make the best of 
your time in every step of the way. Please do follow, like and subscribe us into our social channels listed below.</p><br>
<p>We really appreciate your suppport and love.</p>
		</div>
		
		<div class = "about_3">What we do?</div>
		<div class = "about_4">
			<ul>
				<li>&#x2022; Organise events, shows and parties</li>
				<li>&#x2022; Web Series (pending plan)</li>
				<li>&#x2022; Blogging &#38; Events Photos Uploads</li>
				<!--<li>&#x2022; Unplugged cover songs from awesome upcoming artists</li>
				<li>&#x2022; More to come!</li>-->
			</ul>
		</div>
	</div>
	<?php include_once("footer.php"); ?>
</body>
</html>