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
	<script type="text/javascript" src = "js/date_time.js"></script>
	<script type="text/javascript" src = "js/flip_panel.js"></script>
	<script type="text/javascript" src="jquery-1.9.1.js"></script>

	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("header.php"); ?>
	
	<div id = "content"><br />
		<p style = "color: #000; font-size: 28px; text-transform: uppercase;">London</p>
		<div style = "height:auto; color: grey; font-size: 28px; text-transform: uppercase;"><span id = "date_time"></span>
		<script type="text/javascript">window.onload = date_time('date_time');</script></div><br />
			<div class = "slider">
				<ul>
					<li><img src = "images/slider-3.jpg" /></li>
					<li><img src = "images/slider-2.png" /></li>
					<li><img src = "images/slider-1.png" /></li>
					<li><img src = "images/slider-4.jpg" /></li>
					<li><img src = "images/slider-5.jpg" /></li>
				</ul>
			</div>
			
			<!--<img class = "circle" src = "images/slider_circle_full.png" />-->
			<script>
				var sliders = []
		 	 	$('.slider').each(function() {	
		   	 	sliders.push(new Slider(this))
		  		})
			</script>

			<div class = "slider-buttons">
			    <!--<ul>
			      <li class = "prev"><a href="javascript:sliders[0].goToPrev()"><img src = "images/slider_pre.png" /></a></li>
			      <li class = "next"><a href="javascript:sliders[0].goToNext()"><img src = "images/slider_nex.png" /></a></li>
			    </ul>-->
			    <div style = "height: auto; background-color: none; overflow: hidden; margin: 0 auto; width:100%; position: relative; bottom: -1px; margin-bottom: 48px;">
			    	
				      <a href="javascript:sliders[0].goTo(0)"><div class = "sliderone">Slider One</div></a>
				      <a href="javascript:sliders[0].goTo(1)"><div class = "slidertwo">Slider Two</div></a>
				      <a href="javascript:sliders[0].goTo(2)"><div class = "sliderthree">Slider Three</div></a>
				      <a href="javascript:sliders[0].goTo(3)"><div class = "sliderfour">Slider Four</div></a>
				      <a href="javascript:sliders[0].goTo(4)"><div class = "sliderfive">Slider Five</div></a>
			    		
			</div>
  			</div>
  			
		<!--<div class = "controller" id = "next"></div>-->	
		
		<div class = "clearing"></div>
		
		
		<div class = "home-photo-title">
			<h4>Latest Photos</h4>
		</div>
			<!--needs working-->
			<?php 
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs LIMIT 3");
				while($row = $result->fetch_object()){

					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "home-middleleft">';
					echo '<img src = "image_thumbs/'.$row->image_thumb_name.'">';
					echo '<div class = "home-thumb-left">';
					echo '<h4 style = "color: #0087e6; font-size: 16px; font-weight:500;">'.$row->thumb_heading.'</h4>';
					echo '<br />';
					echo '<p>'.$row->notes.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
				
				}
			?>

			<div class = "clearing"></div><br /><br />
		
			<div class = "home-blog-title">
				<h4>Enjoy reading our blogs!</h4>
			</div>	
			<!---start php code for blog here-->
			<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 4");
				while($row = $result->fetch_object()){
					echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
					echo '<div class = "home-blog-left">';
					echo '<div class = "blog-pic">';
					echo '<img src = "blog_thumb_images/'.$row->blog_thumb.'">';
					echo '</div>';
					echo '<div class = "blog-info">';
					echo '<h4 style = "color: #0087e6; font-size: 16px; font-weight:500;">'.$row->blog_heading.'</h4>';
					echo '<br />';
					echo '<p  style = "font-size: 12px;">'.$row->blog_desc1.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
			
				}
			?>

			<!--<img class = "blogbar" src = "images/blogbar2.png" />-->
			<div class = "clearing"></div>


			<br /><br /><br />

			<!--<div class = "home-advertise">
				<div class = "h_a_1" id = "flip">
					<h3>Advertise With Us!</h3>
				</div>
				<div class = "panel">
					
				</div>
			</div>-->
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>