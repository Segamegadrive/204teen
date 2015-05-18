<?php
//session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		if(isset($_GET['img_thumb_id'])){
				$id = preg_replace('#[^0-9]#i','',$_GET['img_thumb_id']);
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$results = $mysqli->query("SELECT heading FROM image_thumbs_2 WHERE img_thumb_id = '$id'");
				if($results){
					while($obj = $results->fetch_object()){
						echo '<title>'.$obj->heading.'</title>';
						}
					}
				}
			
	?>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "449c36cf-fcc9-4086-b77f-99ac84ae8631", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

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
	<div class = "photo-thumb-box">
		<?php
			if(isset($_GET['img_thumb_id'])){
				$id = preg_replace('#[^0-9]#i','',$_GET['img_thumb_id']);
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$results = $mysqli->query("SELECT heading, programheldby, venue, programdate FROM image_thumbs_2 WHERE img_thumb_id = '$id' LIMIT 1");
				if($results){
					while($obj = $results->fetch_object()){
						echo '<div class = "photo-info">';
						echo '<h3>'.$obj->heading.'</h3>';
						echo '<br>';
						echo '<b style = "color:#555;">Program held by</b>:&nbsp'.$obj->programheldby;
						echo '<br>';
						echo '<b style = "color:#555;">Venue</b>:&nbsp'.$obj->venue;
						echo '<br>';
						echo '<b style = "color:#555;">Date</b>:&nbsp'.$obj->programdate;
						echo '<div class = "sharebuttons">';
						echo '<span class="st_facebook_vcount" displayText="Facebook">';
						echo '</span>';
						echo '<span class="st_twitter_vcount" displayText="Tweet">';
						echo '</span>';
						echo '</div>';
						echo '</div>';
						// echo '<br />';
				}
			}
		}
		?>
	<!--<div class = "photo-info"></div><br />-->
		<?php
			if(isset($_GET['img_thumb_id'])){
				$id = preg_replace('#[^0-9]#i','',$_GET['img_thumb_id']);
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$results = $mysqli->query("SELECT * FROM image_thumbs_2 WHERE img_thumb_id = '$id'");
				if($results){
					while($obj = $results->fetch_object()){
						echo '<div class = "photo-thumb">';
						echo '<a href="display_each_big_image.php?img_thumb_id='.$id.'& img_name='.$obj->img_name.'"><img src = "images/'.$obj->img_name.'" height = "125px" /></a>';
						echo '</div>';
				}
			}
		}
		?>
</div>
<div class = "photo-header2"><h4>Latest Blogs</h4></div>
<div class = "side-bar">
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
	<div class = "photo-header2"><h4>More Photos</h4></div>
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
</div><!-- side-bar end-->

<div class = "clearing"></div><br />
</div><!--content end-->
<?php include_once("footer.php"); ?>
</body>
</html>