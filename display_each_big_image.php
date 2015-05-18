<?php
session_start();
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
	<div class = "photo-thumb-box" >

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
				echo '<b>Program held by</b>:&nbsp'.$obj->programheldby;
				echo '<br>';
				echo '<b>Venue</b>:&nbsp'.$obj->venue;
				echo '<br>';
				echo '<b>Date</b>:&nbsp'.$obj->programdate;
				echo '<div class = "next-prev-big-image">';
				// keep the code below for incase
				// echo '<img style = "cursor:pointer; margin-right:35px; height:12px;" src = "images/previousimage.png" onclick = "swapImg2();" />';
				// echo '<img style = "cursor:pointer; margin-right:10px; height:12px;" src = "images/nextimage.png" onclick = "swapImg();" />';
				
				echo '<p id = "previous-big-image" onclick = "swapImg2();">Prev</p>';
				echo '<p id = "next-big-image" onclick = "swapImg();">Next</p>';
				echo '</div>';
				echo '</div>';
				// echo '<br />';
		}
	}
}
?>
	<!--<div class = "photo-info" ></div><br/>-->
	
<?php
	if(isset($_GET['img_thumb_id'])){
			$id = preg_replace('#[^0-9]#i','',$_GET['img_thumb_id']);
			$img_name = $_GET['img_name'];
			$current_url = base64_encode($_SERVER['REQUEST_URI']);
			$results = $mysqli->query("SELECT * FROM image_thumbs_2 WHERE img_thumb_id = '$id'");
			$array = array();
			echo '<img style = "margin-left:9px;cursor:pointer;" id="swap" src = "images/'.$img_name.'" onclick="swapImg();">';
			if($results){
				while($obj = $results->fetch_object()){
					$array[] = $obj->img_name;
			}
		}
	}
?>
<div style = "background-color: none; height: 25px; position:relative;"></div>
<!--<p>Facebook Comment plug in can be implemeted here</p>-->
</div><!--photo-thumb-box end-->
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
						echo '<img src = "images/blog_images/'.$row->blog_thumb.'" height = "110" width = "125" />';
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
	
</div>
<!-- <div class = "clearing"></div> -->
</div>
<?php include_once("footer.php"); ?>
</body>
</html>

<script>
	var listImage = <?php echo json_encode($array); ?>;

	for(var i=0;i<listImage.length;i++){
	var imgs = new Image();
	imgs.src = "images/" + listImage[i];
	}

	var x = listImage.indexOf("<?php echo $img_name;  ?>");

	function swapImg(){
	var doc = document.getElementById("swap");
	
	if(x<listImage.length-1){
	x ++;
	}else{
	x = 0;
	}

	doc.src = "images/" + listImage[x];
	} 

	function swapImg2(){
	var doc = document.getElementById("swap");
	
	if(x>0){
	x--;
	}else{
	x = i-1;
	}
	doc.src = "images/" + listImage[x];
	} 
</script>	