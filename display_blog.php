<?php
	//session_start();
	include_once("connect.php");
?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<?php
		if(isset($_GET['blog_id'])){
				$id = preg_replace('#[^0-9]#i','',$_GET['blog_id']);
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$results = $mysqli->query("SELECT blog_heading FROM blog WHERE blog_id = '$id'");
				if($results){
					while($obj = $results->fetch_object()){
						echo '<title>'.$obj->blog_heading.'</title>';
						}
					}
				}
			
	?>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    	<script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script>
	
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
							echo '<div class = "blog-title">';
							echo '<p style = "font-size: 21px; color: #555; font-family: georgia;">'.$obj->blog_heading.'</p>';
							echo '<b>By</b>:&nbsp;'.$obj->by;
							echo '&nbsp;<b>in</b>&nbsp;'.$obj->date_posted;
							echo '</div>';
							echo '<div class = "fblikes">';
							echo '<span class="st_facebook_hcount" displayText="Facebook"></span>';
							echo '<span class="st_twitter_hcount" displayText="Tweet"></span>';
							
							echo '</div>';
							echo '<br />';

							if($obj->blog_desc1){
								echo '<p>'.$obj->blog_desc1.'</p>';	
							}
							else{
								empty($obj->blog_desc1);
							}
							
							echo '<br />';

							if($obj->blog_big_image1){
								echo '<img src = "images/blog_images/'.$obj->blog_big_image1.'" >';	
							}
							else{
								empty($obj->blog_big_image1);
							}

							if($obj->blog_photo_sub_title_1){
								echo '<div class = "blog_photo_sub_title">'.$obj->blog_photo_sub_title_1.'</div>';
							}
							else{
								empty($obj->blog_photo_sub_title_1);
							}

							echo '<br />';

							if($obj->blog_desc2){
								echo '<p>'.$obj->blog_desc2.'</p>';	
							}
							else{
								empty($obj->blog_desc2);
							}
							
							echo '<br />';

							if($obj->blog_big_image2){
								echo '<img src = "images/blog_images/'.$obj->blog_big_image2.'" >';
							}
							else{
								empty($obj->blog_big_image2);
							}

							if($obj->blog_photo_sub_title_2){
								echo '<div class = "blog_photo_sub_title">'.$obj->blog_photo_sub_title_2.'</div>';
							}
							else{
								empty($obj->blog_photo_sub_title_2);
							}

							echo '<br />';

							if($obj->blog_desc3){
								echo '<p>'.$obj->blog_desc3.'</p>';
							}
							else{
								empty($obj->blog_desc3);
							}
							
							echo '<br />';

							if($obj->blog_big_image3){
								echo '<img src = "images/blog_images/'.$obj->blog_big_image3.'" >';
							}
							else{
								empty($obj->blog_big_image3);
							}

							if($obj->blog_photo_sub_title_3){
								echo '<div class = "blog_photo_sub_title">'.$obj->blog_photo_sub_title_3.'</div>';
							}
							else{
								empty($obj->blog_photo_sub_title_3);
							}
							
							echo '<br />';

							if ($obj->blog_desc4) {
								echo '<p>'.$obj->blog_desc4.'</p>';
							}
							else{
								empty($obj->blog_desc4);
							}
							
					}
				}
			}
			?>
	
			<div class = "clearing"></div>
	</div><br />
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
	<div class = "clearing"></div><br />
	
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>