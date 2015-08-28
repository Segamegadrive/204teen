<?php
	session_start();
	include_once("connect.php");
?>

<?php
	if($_POST['submit']){
		if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty ($_POST['contact_number']) || empty($_POST['comments'])){
			$error = true;
		}else{
			$to = 	"rs204teen@gmail.com";
			
			$first_name = trim($_POST['first_name']);
			$last_name = trim($_POST['last_name']);
			$email = trim($_POST['email']);
			$contact_number = trim($_POST['contact_number']);
			$comments = trim($_POST['comments']);

			$subject = "New Message";

			$messages = "First Name: $first_name \r\n Last Name: $last_name \r\n Email: $email \r\n Contact Number: $contact_number \r\n Comments: $comments";
			$headers = "From:" . $first_name . $last_name;
			$mailsent = mail($to, $subject, $messages, $headers);

			if($mailsent){
				$sent = true;
			} 
		}
	}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Welcome to 204teen Production</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>

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
	<div id = "content">
		<?php if($error == true){ ?>
		<p class = "error">Sorry, please make sure you enter all the details required in the boxes provided.</p>
		<?php } if($sent == true) { ?>
		<p class = "sent">Thank you, your email has been sent successfully. We will get back to you ASAP!</p>
		<?php } ?> 
		<p class = "contact_title">Message Us...</p><br />
		<div id = "contact_form_wrapper">
		<form name = "contact" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
			<label for = "first_name">First Name:</label><br><br>
			<input type = "text" name = "first_name" /><br><br>
			<label for = "last_name">Last Name:</label><br><br>
			<input type = "text" name = "last_name" /><br><br>
			<label for = "email">Email:</label><br><br>
			<input type = "text" name = "email" /><br><br>
			<label for = "contact_number">Contact Number:</label><br><br>
			<input type = "text" name = "contact_number" /><br><br>
			<label for = "comments">Comments:</label><br><br>
			<textarea class = "txt_area" name = "comments" cols = "64" rows = "10"></textarea><br><br>
			<input class = "button" type = "submit" name = "submit" value = "Submit" />
		</form>
		</div> 
		<div id = "contact_map">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:440px;width:396px;"><div id="gmap_canvas" style="height:455px;width:396px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">(trivoo.net)</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(51.5233439,-0.1026796999999533),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.5233439, -0.1026796999999533)});infowindow = new google.maps.InfoWindow({content:"<b>204teen Production</b><br/>145-157 St John Street <br/>EC1V 4PW London" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	
		</div>
		<div class = "clearing"></div>

	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>