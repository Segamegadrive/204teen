<?php
	session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>204teen Production - Photos</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    	<script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script>
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
	<div style = "height:7px; background-color:none;"></div>
	<div style = "width:100%; height: 395px; overflow: hidden; margin: 0 auto; background-color: #E0EBEB; /*background-image: url('images/');background-repeat:no-repeat; background-size: 100% 100%;*/">
		<div class = "photopage-big-image">
			<!-- <div style = "background-color: none; height: auto; color:#fff; font-size:25px; text-align: center; position: absolute;left: 323px;top: 64px;"><h1>Click away now</h1></div>
			<div style = "background-color: none; height: auto; color:#fff; font-size:19px; font-weight: 400; text-align: center; position: absolute;left: 369px;top: 125px;">Yours only fav moments, recall it :)</div> -->
			<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs LIMIT 4");
				while($row = $result->fetch_object()){
					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "pbi1">';
					echo '<img src = "images/'.$row->image_thumb_2.'">';
					echo '<div class = "pbi1-info">';
					echo '<h4 style = "color: #fff; margin-bottom: 10px; margin-top:10px;">'.$row->thumb_heading.'</h4>';
					// echo '<p style = "margin-bottom: 10px;">'.$row->notes.'</p>';
					//chage the URL of the Facebook Like and Share. Do not Forget
					echo '<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F204teen.com%2Fphoto.php&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=812208005490431" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;position: relative; left: 63px;" allowTransparency="true"></iframe>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
				}
			?>
		</div>
	</div>
	<div id = "content-for-photo">	
		
		<div class = "clearing"></div>
		
		<div class = "photo-container"><br />
		<div class = "home-photo-title">
			<h4>MORE PHOTOS</h4>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F204teen.com%2Fphoto.php&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=812208005490431" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:23px; width: 140px; float: right; margin-top:-25px;" allowTransparency="true"></iframe>
		</div>
			<!--needs working-->
			<?php 
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs");
				while($row = $result->fetch_object()){

					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "home-middleleft-1">';
					echo '<img src = "images/'.$row->image_thumb_name.'">';
					echo '<div class = "home-thumb-left">';
					echo '<h4 style = "color: none; font-size: 14px; font-weight:bold;margin-bottom:8px;">'.$row->thumb_heading.'</h4>';
					// echo '<br />';
					echo '<p>'.$row->notes.'</p>';
					echo '</div>';
					// echo '<br />';
					echo '</div>';
					echo '</a>';
				
				}
			?>
	
			<div class = "clearing"></div>
	</div>
	<div class = "photo-header"><h4>Explore Our Blogs</h4></div>

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
	
	<div class = "clearing"></div>
	<div class = "photo-page-side-div">
	<div class = "home-advertise" style = "position: relative; left: -19px;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 204teen_Ads -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-7660985966810746"
			     data-ad-slot="3817595917"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	</div>
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>