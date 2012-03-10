<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>aust homepage</title>
<link rel="stylesheet" href="css/style.css" media="all" type="text/css" />
<link rel="stylesheet" href="css/BarackSlideshow.css" type="text/css" media="screen" title="Stylesheet" charset="utf-8" />
<script type="text/javascript" charset="utf-8" src="js/mootools-1.2.1-core-yc.js"></script>
<script type="text/javascript" charset="utf-8" src="js/mootools-1.2.2.2-more.js"></script>
<script type="text/javascript" charset="utf-8" src="js/Fx.MorphList.js"></script>
<script type="text/javascript" charset="utf-8" src="js/BarackSlideshow.js"></script>
<script type="text/javascript">
		window.addEvent('domready', function(){
   			 new BarackSlideshow('menu', 'pictures', 'loading', {transition: 'fade', auto: true ,autostart: true});
		});
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.aslidertext.js"></script>
<script language="javascript">
	jQuery.noConflict ();
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#newsticke').aSliderText({
				updateTime: 2000,
				height: 70,
				//element: 'li'
		});
	});
</script>
</head>

<body>
<div id="wrapper">
	<div id="top-menu">
		<?php
			include ('include/top-menu.php');
		?>
	</div>
	<div id="header">
		<?php
			include ('include/header.php');
		?>
	</div>
	<div id="main-menu">
		<?php
			include ('include/main-menu.php');
		?>
	</div>
	<div id="content">
		<div id="content-top">
			<div class="banner">
				<div class="welcome">
					<?php
						include ('content/hom_content1.php');
					?>
				</div>
				<div id="slideshow">
					<div id="loading">Loading</div>
		  			<?php
						include ('content/hom_slideshow.php');
					?>
				</div>
			</div>
		</div>
		<div id="content-bottom">
			<div class="aust">
				<?php
					include ('content/hom_content2.php');
				?>
			</div>
			<div class="news">
				<div class="heading2">
					University News
				</div>	
				<div class="news-box">
					<?php
						include ('content/hom_content3.php');
					?>
					<div class="link">
						<a href="news/news.php">more news...</a>
					</div>
				</div>
			</div>
			<div class="spotlight">
				<div class="heading2">
					Spotlight
				</div>	
				<div class="spotlight-box">
					<?php
						include ('content/hom_content4.php');
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footerDiv">
	<div id="footer">
		<?php
			include 'include/footer.php';
		?>
	</div>
</div>
</body>
</html>
