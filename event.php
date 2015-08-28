<?php
	session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>204teen Production - Events</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
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
	<div id = "content-for-photo">
	<div class = "events_box_2">UPCOMING EVENTS</div>
	<div class = "events_box">
	
	<h3 style = "text-align:center; margin-top:100px;color:#999;">Any new upcoming events will be uploaded here. Thank you for visiting us!</h3>
	<p style = "text-align:center; color:#888;">Team 204teen.</p>
		<?php
			//$current_url = base64_encode($_SERVER['REQUEST_URI']);
				//$result = $mysqli->query("SELECT * FROM events");
				//while($row = $result->fetch_object()){
					//echo '<div class = "event_flyer">';
						//echo '<img src = "images/events_images/'.$row->event_flyer.'" width = "670" height = "1200" />';
					//echo '</div>';
					//echo '<div class = "event_info">';
						//echo '<p><strong>Event Title:&nbsp;</strong>'.$row->event_title.'</p>';
						//echo '<p><strong>Venue:&nbsp;</strong>'.$row->event_venue.'</p>';
						//echo '<p><strong>Date:&nbsp;</strong>'.$row->event_date.'</p>';
						//echo '<p><strong>Time:&nbsp;</strong>'.$row->event_time.'</p>';
						//echo '<p><strong>DJs:&nbsp;</strong>'.$row->DJ.'</p>';
					//echo '</div>';
					//echo '<br>';
				//}
		?>
	</div>

		<!-- <div class = "clearing"></div> -->	

			<div class = "photo-header2"><h4>More Photos</h4></div>
			<div class = "side-bar">
					
						<?php 
							$current_url = base64_encode($_SERVER['REQUEST_URI']);
							$result = $mysqli->query("SELECT * FROM image_thumbs LIMIT 4");
							while($row = $result->fetch_object()){

								echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
								echo '<div class = "photo-page-side-div">';
								echo '<div class = "box1">';
								echo '<div class= "box1imagethumb">';
								// echo '<div class = "home-middleleft">';
								echo '<img src = "images/'.$row->image_thumb_name.'" height = "110" width = "125" />';
								echo '</div>';
								echo '<div class = "box1infodiv">';
								// echo '<div class = "home-thumb-left">';
								echo '<h4 style = "color: none; font-size: 13px; font-weight:bold; margin-bottom:5px;">'.$row->thumb_heading.'</h4>';
								// echo '<br />';
								echo '<p  style = "font-size: 12px; color: #777;">'.$row->notes.'</p>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
								echo '</a>';
							
							}
						?>

					<div class = "photo-header2"><h4>Latest Blogs</h4></div>
					<?php
						$current_url = base64_encode($_SERVER['REQUEST_URI']);
								$result = $mysqli->query("SELECT * FROM blog LIMIT 4");
								while($row = $result->fetch_object()){
										echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
										echo '<div class = "photo-page-side-div">';
										echo '<div class = "box1">';
										echo '<div class= "box1imagethumb">';
										echo '<img src = "images/blog_images/'.$row->blog_thumb.'" />';
										echo '</div>';
										echo '<div class = "box1infodiv">';
										echo '<h4 style = "color: none; font-size: 13px; font-weight:bold; margin-bottom:5px;">'.$row->blog_heading.'</h4>';
										echo '<p  style = "font-size: 12px; color: #777;">'.$row->blog_desc1.'</p>';
										echo '</div>';
										echo '</div>';
										echo '</div>';
										echo '</a>';
								}
					?>
			</div>
		
	<div class = "clearing"></div>	
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>