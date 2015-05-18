<?php
	session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en=GB">
<head>
	<title>Welcome to Chautari Hub</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script>
	

</head>
<body>
	<?php include_once("header.php"); ?>
	<p></p>
	<div id = "content-for-photo">	
		
		<div class = "clearing"></div>
		
		<div class = "photo-container">
		<br />
			<!--needs working-->
			<?php
				if(isset($_GET['blog_id'])){
					$id = preg_replace('#[^0-9]#i','',$_GET['blog_id']);
					$current_url = base64_encode($_SERVER['REQUEST_URI']);
					$results = $mysqli->query("SELECT * FROM blog WHERE blog_id = '$id'");
					if($results){
						while($obj = $results->fetch_object()){
							echo '<h4>'.$obj->blog_heading.'</h4>';
							echo '<br />';
							echo '<p>'.$obj->blog_desc1.'</p>';
							echo '<br />';
							echo '<img src = "images/'.$obj->blog_big_image1.'" >';
							echo '<br /><br />';
							echo '<p>'.$obj->blog_desc2.'</p>';
							echo '<br />';
							echo '<img src = "images/'.$obj->blog_big_image2.'" >';
							echo '<br /><br />';
							echo '<p>'.$obj->blog_desc3.'</p>';
							echo '<br />';
							echo '<img src = "images/'.$obj->blog_big_image3.'" >';
					}
				}
			}
			?>
	
			<div class = "clearing"></div>
	</div>
	<div class = "photo-page-side-div">put other contents like blogs, other photos, adverts, etc here</div>
	<div class = "clearing"></div><br />
	
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>