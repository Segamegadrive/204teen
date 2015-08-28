<?php
	//session_start();
	include_once("connect.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Welcome to 204teen Production</title>
	<link rel = "stylesheet" type = "text/css" href = "css/mydesign.css" />
	<meta charset = "utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	
	<link href="images/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'> 

    <script type="text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src = "js/slider.js"></script> 
	<script type="text/javascript" src = "js/date_time.js"></script>
	<script type="text/javascript" src = "js/flip_panel.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>

	<script type="text/javascript" src = "js/jquery.cycle.all.js"></script>

	<script type="text/javascript">

		$(function(){
			$('#play').click(function() {$('#slider').cycle('resume'); return false; });
			$('#pause').click(function() {$('#slider').cycle('pause'); return false; });

		$('#slider').cycle({

			fx: 		'scrollHorz',
			next: 		'#next',
			prev: 		'#prev',
			pager: 		'#pager',
			timeout: 	3000,
			speed: 		900,
			pause: 		1 	    

		});
	})
	</script>

	<!--[if lt IE 9]>
		<script src="dist/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("header.php"); ?>
	<div id = "content">
	<div class = "meronepal"><br /><br />
			<div class = "date">25.04.2015</div><br />
			<div class = "nepal_1">MERO-NEPAL</div><br />
			<div style = "width:280px; margin: 0 auto;"><img src = "images/nepalflag.png" width="280" /></div><br />
			<div class = "nepal_2">7.9 Magnitude Earthquake hit Nepal.</div>
			<div class = "nepal_2">A very dark day for all the Nepalese residing all around the world.</div><br /><br /><br />
			<div class = "nepal_4">"FOOD & WATER SUPPLY IS THE LATEST MAIN CONCERN"</div><br /><br />
			<div style = "border-bottom: 1px dotted #cecece; margin-bottom: 20px;"></div>	
			<div class = "nepal_2" style = "font-size: 14px; color:#555; font-weight:bold;">Upcoming Programs:</div><br /><br />	
			<a href = "https://www.facebook.com/events/833833630017347/" target = "_blank"><div class = "upcoming_programs">Occured - Candlelight Vigil For Nepal - Earthquake 2015</div></a>	
			<a href = "https://www.facebook.com/events/628937047240816/" target = "_blank"><div class= "upcoming_programs_2">Occured - Run for Nepal 2015</div></a><div class = "clearing"></div><br /><br />
			<a href = "https://www.facebook.com/events/366843443513290/" target = "_blank"><div class = "upcoming_programs">SWINDON STANDS WITH NEPAL: Nepal Earthquake: Candle Light Vigil: Moment of Silence</div></a>
			<a href = "#" target = "_blank"><div class= "upcoming_programs_2">Pending...</div></a><div class = "clearing"></div><br /><br />	
			<div class = "nepal_2" style = "font-size: 14px; color:#555; font-weight:bold;">Donation Campaigns:</div><br />
			<a href = "http://www.gofundme.com/swdcp4?fb_action_ids=10204486529907381&fb_action_types=og.shares&fb_ref=m_d_ty" target = "_blank"><div class = "donate">sarala thapa</div></a>
			<a href = "https://www.gofundme.com/GurkhaChannel" target = "_blank"><div class = "donate_1">Gurkha Channel</div></a>
			<a href = "http://www.gofundme.com/sygx5g" target = "_blank"><div class = "donate_2">Poonam Lingkhim Rai</div></a><div class="clearing"></div><br />
			<a href = "http://www.gofundme.com/Nepalreliefqgewive" target = "_blank"><div class = "donate">QGE Wives</div></a>
			<a href = "http://www.gofundme.com/HelpForBarpak?fb_action_ids=10155469073310543&fb_action_types=og.shares&fb_ref=m_d_ty" target = "_blank"><div class = "donate_1">Barpak Village</div></a>
			<a href = "http://www.gofundme.com/sz7vk8?fb_action_ids=926412324089913&fb_action_types=og.shares" target = "_blank"><div class = "donate_2">Ashford Brothers</div></a><div class = "clearing"></div><br />
			<a href = "http://www.gofundme.com/SaghaunaiParcha" target = "_blank"><div class = "donate">Parcha Production</div></a>
			<a href = "http://www.gofundme.com/RescueNepal?fb_action_ids=941791612522197&fb_action_types=og.shares&fb_ref=m_d_ty" target = "_blank"><div class = "donate_1">SUNS - Surrey Uni</div></a>
			<a href = "http://www.gofundme.com/swhtjs" target = "_blank"><div class = "donate_2">Jessica Haydon Bhujel</div></a><div class = "clearing"></div><br />
			<a href = "http://www.bbc.co.uk/news/uk-32474414?ns_mchannel=social&ns_campaign=bbc_breaking&ns_source=twitter&ns_linkname=news_central" target = "_blank"><div class = "donate">£5 million - UK</div></a>
			<a href = "https://www.gofundme.com/sxu3qw" target = "_blank"><div class = "donate_1">CULNS - Suprina Rai</div></a>
			<a href = "http://www.gofundme.com/swsafg" target = "_blank"><div class = "donate_2">BSNS</div></a><div class="clearing"></div><br />
			<a href = "http://www.gofundme.com/t8g2ycs?fb_action_ids=101218723545261&fb_action_types=og.shares&fb_ref=fb_cr_n" target = "_blank"><div class = "donate">NNC</div></a>
			<a href = "http://www.gofundme.com/thesignaturee" target = "_blank"><div class = "donate_1">Signaturee</div></a>
			<a href = "http://www.gofundme.com/sxggg5w?fb_action_ids=10152731787856244&fb_action_types=og.shares&fb_ref=undefined" target = "_blank"><div class = "donate_2">Deepa Thapa Magar</div></a><div class="clearing"></div><br />
			<a href = "https://www.justgiving.com/30-Signals-Regiment-GurkhaChefs/?utm_source=Facebook&utm_medium=fundraisingpage&utm_content=30-Signals-Regiment-GurkhaChefs&utm_campaign=pfp-share" target = "_blank"><div class = "donate">Surendra-Dinesh-Bishal</div></a>
			<a href = "https://www.change.org/p/prime-minister-sushil-koirala-the-united-nations-nepal-earthquake-2015-petition-to-the-prime-minister-to-mobilize-funds-and-resources?recruiter=53524753&utm_source=share_petition&utm_medium=facebook&utm_campaign=autopublish&utm_term=mob-xs-share_petition-no_msg&fb_ref=Default" target = "_blank"><div class = "donate_1">sign the petition here</div></a>
			<a href = "http://www.gofundme.com/sw4c7qw" target = "_blank"><div class = "donate_2">helping you</div></a><div class="clearing"></div><br />
			<a href = "http://www.gofundme.com/sxup98" target = "_blank"><div class = "donate">help nepal - monika shrestha</div></a>
			<a href = "http://www.gofundme.com/swzp99s" target = "_blank"><div class = "donate_1">Sharmili Lama</div></a>
			<a href = "http://www.gofundme.com/QGSintake10" target = "_blank"><div class = "donate_2">Intake 10</div></a>
			<div class = "clearing"></div><br />
			<a href = "http://www.gofundme.com/b13cares?fb_action_ids=10155493641515274&fb_action_types=og.shares&fb_ref=undefined" target = "_blank"><div class = "donate">B-13</div></a>
			<a href = "http://www.gofundme.com/sz9kck" target = "_blank"><div class = "donate_1">Arun Gurung</div></a>
			<a href = "#" target = "_blank"><div class = "donate_2">Pending...</div></a>
			<div class = "clearing"></div><br />
			<a href = "https://give.wfp.org/5279/?step=country&lead_source=2015-wfp-nepal-emergency&form_tag=2015-wfp-nepal-emergency" target="_blank"><div class = "nepal_3"><img src = "images/wfp.gif" /></div></a>
		</div><br /><br />
			

		<div style = "border-bottom: 1px dotted #cecece; margin-bottom: 20px;"></div>
		<!--<p style = "color:#555; font-size: 75px; text-transform: uppercase;float: none; text-align: center; margin-top: 13px;">London</p><div class = "clearing"></div>
		<div style = "height:auto; color: #666; font-size: 20px; text-transform: uppercase;float:none;background-color:none;margin-bottom: 30px; text-align: center;"><span id = "date_time"></span>
		<script type="text/javascript">window.onload = date_time('date_time');</script></div>--!><!-- <br /> -->
			<!-- <div class = "home-photo-title">
			<h4>Latest Photos</h4>
		</div> -->
		<!-- <div style = "height: 5px; width:100%; margin: 0 auto;"></div> -->
  			<!-- <div class = "clearing"></div> -->

			<?php 
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs LIMIT 3");
				while($row = $result->fetch_object()){

					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "home-middleleft">';
					echo '<img src = "images/'.$row->image_thumb_name.'">';
					echo '<div class = "home-thumb-left">';
					echo '<h4 style = "color: none; font-size: 14px; font-weight:bold;margin-bottom:8px;">'.$row->thumb_heading.'</h4>';
					// echo '<br />';
					echo '<p>'.$row->notes.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
				
				}
			?>
			<div class = "clearing"></div>
			
			<?php 
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM image_thumbs LIMIT 1");
				while($row = $result->fetch_object()){

					echo '<a href = "display_thumbs2_images.php?img_thumb_id='.$row->img_thumb_id.'">';
					echo '<div class = "home-m-1" style = "background-image: url(images/missuknepal2014.jpg); background-repeat: no-repeat;">';
					echo '<div class = "home-m-2">';
					echo '<p>Photo : '.$row->notes.'</p>';
					echo '</div>';			
					echo '</div>';
					echo '</a>';
				}
			?>
			
			<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 1");
				while($row = $result->fetch_object()){
					echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
					echo '<div class = "home-m-1" style = "background-image: url(images/blog_images/miss_uk_nepal_2014.jpg); background-repeat: no-repeat;">';
					echo '<div class = "home-m-2">';
					echo '<p>Blog : '.$row->blog_desc1.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
				}
			?>

			
			<div class = "clearing"></div>

			<div style = "border-bottom: 1px dotted #cecece; margin-bottom: 5px;"></div>  			
		<!--<div class = "controller" id = "next"></div>-->	
		<!-- <div style = "border-bottom: 1px dotted #cecece;"></div> -->
		
			<!-- <div class = "home-blog-title">
				<h4>Enjoy reading our blogs!</h4>
			</div> -->	
			<!---start php code for blog here-->
			<?php
				$current_url = base64_encode($_SERVER['REQUEST_URI']);
				$result = $mysqli->query("SELECT * FROM blog LIMIT 4");
				while($row = $result->fetch_object()){
					echo '<a href = "display_blog.php?blog_id='.$row->blog_id.'">';
					echo '<div class = "home-blog-left">';
					echo '<div class = "blog-pic">';
					echo '<img src = "images/blog_images/'.$row->blog_thumb.'">';
					echo '</div>';
					echo '<div class = "blog-info">';
					echo '<h4 style = "color: none; font-size: 14px; font-weight:bold; margin-bottom:10px;">'.$row->blog_heading.'</h4>';
					echo '<p  style = "font-size: 12px;">'.$row->blog_desc1.'</p>';
					// echo '<p  style = "font-size: 12px;">'.$row->blog_desc2.'</p>';
					echo '</div>';
					echo '</div>';
					echo '</a>';
			
				}
			?>

			<!--<img class = "blogbar" src = "images/blogbar2.png" />-->
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
	</div><!--content end-->
	<?php include_once("footer.php"); ?>
</body>
</html>