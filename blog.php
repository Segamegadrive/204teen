<?php
	session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en-GB">
<head>
	<title>204teen Production - Blogs</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    	<script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script> 
		$(document).ready(function(){
		  $("#flip").click(function(){
		    $("#panel").slideToggle("slow");
		  });
		});
	</script>

	<style> 
		#flip{
			cursor: pointer;
		}
		#flip img{
			float: left;
		}

		#panel,#flip
		{
		/*padding:0px;*/
		/*text-align:center;*/
		background-color:none;
		/*border:solid 1px #c3c3c3;*/
		width: 990px;
		height: 307px;
		float: left;
		margin-left: 27px;
	
		}
		#panel
		{
		padding:5px;
		display:none;
		width: 980px;
		height: auto;
		/*float: left;*/
		background-color: none;
		/*border-bottom: 1px solid #cecece;*/
		}

		.blog_top_info{
			background-color: #222;
			height: 175px;
			width: 245px;
			overflow: hidden;
			margin: 0 auto;
			position: relative;
			bottom: 3px;
			/*border: 3px solid #f6f6f6;*/
			font-size: 12px;
			padding: 10px;
			float: left;
			margin-left: 3px;
			text-align: center;
			color: #fff;
			text-align: center;
			padding-top: 120px;
		}

	</style>
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
		<div style = "background-color: none; width: 100%; float: left; height: auto; overflow: hidden; margin: 0 auto; margin-bottom:10px;">

		<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 1");
				while($row = $result->fetch_object()){
					// echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
					echo '<div id = "flip">';
					echo '<img src = "images/blog_images/'.$row->blog_page_main_big_thumb.'" width = "722" alt = "miss_uk_nepal_2014" />';
					echo '<div class = "blog_top_info">';
					echo '<h2 style = "margin-bottom: 8px;">"Blog of the Day"</h2>';
					echo '<p>'.$row->blog_heading.'</p>';
					echo '</div>';
					echo '</div>';
					echo '<div id = "panel">';
					echo '<div class = "blog-title" style = "text-align:center;">';
							echo '<p style = "font-size: 21px; color: #444; font-family: georgia;">'.$row->blog_heading.'</p>';
							echo '<b>By</b>:&nbsp;'.$row->by;
							echo '&nbsp;<b>in</b>&nbsp;'.$row->date_posted;
							echo '</div>';
							echo '<div class = "fblikes" style = "text-align: center; width:938px;">';
							echo '<span class="st_facebook_hcount" displayText="Facebook"></span>';
							echo '<span class="st_twitter_hcount" displayText="Tweet"></span>';
							
							echo '</div>';
							echo '<br />';

							if($row->blog_desc1){
								echo '<p style = "text-align:center;">'.$row->blog_desc1.'</p>';	
							}
							else{
								empty($row->blog_desc1);
							}
							
							echo '<br />';

							if($row->blog_big_image1){
								echo '<img style = "margin-left: 145px;" src = "images/blog_images/'.$row->blog_big_image1.'"  alt = "miss_uk_nepal_2014" />';	
							}
							else{
								empty($row->blog_big_image1);
							}

							if($row->blog_photo_sub_title_1){
								echo '<div class = "blog_photo_sub_title">'.$row->blog_photo_sub_title_1.'</div>';
							}
							else{
								empty($row->blog_photo_sub_title_1);
							}

							echo '<br />';

							if($row->blog_desc2){
								echo '<p style = "text-align:center;">'.$row->blog_desc2.'</p>';	
							}
							else{
								empty($row->blog_desc2);
							}
							
							echo '<br />';

							if($row->blog_big_image2){
								echo '<img style = "margin-left: 145px;" src = "images/blog_images/'.$row->blog_big_image2.'" alt = "miss_uk_nepal_2014" />';
							}
							else{
								empty($row->blog_big_image2);
							}

							if($row->blog_photo_sub_title_2){
								echo '<div class = "blog_photo_sub_title">'.$row->blog_photo_sub_title_2.'</div>';
							}
							else{
								empty($row->blog_photo_sub_title_2);
							}
							
							echo '<br />';

							if($row->blog_desc3){
								echo '<p style = "text-align:center;">'.$row->blog_desc3.'</p>';
							}
							else{
								empty($row->blog_desc3);
							}
							
							echo '<br />';

							if($row->blog_big_image3){
								echo '<img style = "margin-left: 145px;" src = "images/blog_images/'.$row->blog_big_image3.'" alt = "miss_uk_nepal_2014" />';
							}
							else{
								empty($row->blog_big_image3);
							}

							if($row->blog_photo_sub_title_3){
								echo '<div class = "blog_photo_sub_title">'.$row->blog_photo_sub_title_3.'</div>';
							}
							else{
								empty($row->blog_photo_sub_title_3);
							}

							echo '<br />';

							if($row->blog_desc4){
								echo '<p style = "text-align:center;">'.$row->blog_desc4.'</p>';
							}
							else{
								empty($row->blog_desc4);
							}
							
					echo '</div>';
					// echo '</a>';
			
				}
			?>
		</div>
		<div class = "clearing"></div>

					<div style = "border-bottom: 1px dotted #cecece; margin-bottom: 5px;"></div> 	
					<div style = "background-color:#fff; width: 728px; height: 90px; margin: 0 auto;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- 204teen_Ads_2 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:728px;height:90px"
						     data-ad-client="ca-pub-7660985966810746"
						     data-ad-slot="3677995111"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					</div>
					<div style = "border-bottom: 1px dotted #cecece; margin-top: 5px;"></div> 	
		<!-- <div class = "home-blog-title">
				<h4>Explore our more Blogs!</h4>
		</div> 
 -->
		<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 4");
				while($row = $result->fetch_object()){
					echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
					echo '<div class = "home-blog-left">';
					echo '<div class = "blog-pic">';
					echo '<img src = "images/blog_images/'.$row->blog_thumb.'" alt = "blog_images" />';
					echo '</div>';
					echo '<div class = "blog-info">';
					echo '<h4 style = "color: none; font-size: 15px; font-weight:bold; margin-bottom:7px;">'.$row->blog_heading.'</h4>';
					echo '<p  style = "font-size: 12px;">'.$row->blog_desc1.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
			
				}
			?>	

			<div class = "clearing"></div>
						<br />
						<div style = "border-bottom: 1px dotted #cecece; margin-bottom: 5px;"></div> 
						<br />
						<div class = "home-advertise" style = "margin-right:18px;">
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
						<div class = "home-advertise" style = "margin-right:17px;">
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
						<div class = "home-advertise" style = "margin-right:10px;">
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
	<!-- <div style = "height: 15px; width: 100%; background-color:none;"></div>
	<div class = "blog-lists"></div> -->
	
	
		
		
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>