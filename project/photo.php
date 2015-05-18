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
		<div style = "width:100%; height: 200px; background-color: red;"></div>
		<div class = "clearing"></div>
		
		<div class = "photo-container"><br />
		<div class = "home-photo-title">
			<h4>Latest Photos</h4>
		</div>
			<!--needs working-->
			<?php 
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs");
				while($row = $result->fetch_object()){

					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "home-middleleft">';
					echo '<img src = "image_thumbs/'.$row->image_thumb_name.'">';
					echo '<div class = "home-thumb-left">';
					echo '<h4>'.$row->thumb_heading.'</h4>';
					echo '<br />';
					echo '<p>'.$row->notes.'</p>';
					echo '</div>';
					echo '<br />';
					echo '</div>';
					echo '</a>';
				
				}
			?>
	
			<div class = "clearing"></div>
	</div>
	<div class = "photo-header"><h4>DON'T MISS</h4></div>

	<?php
		$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 4");
				while($row = $result->fetch_object()){
						echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
						echo '<div class = "photo-page-side-div">';
						echo '<div class = "box1">';
						echo '<div class= "box1imagethumb">';
						echo '<img src = "blog_thumb_images/'.$row->blog_thumb.'">';
						echo '</div>';
						echo '<div class = "box1infodiv">';
						echo '<h4 style = "color: #0087e6; font-size: 15px; font-weight: 400;">'.$row->blog_heading.'</h4>';
						echo '<p  style = "font-size: 12px; color: grey;">'.$row->blog_desc1.'</p>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</a>';
				}

	?>
	<div class = "clearing"></div>
	
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>