<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>aust homepage</title>
<link rel="stylesheet" href="../css/style.css" media="all" type="text/css" />
<link rel="stylesheet" href="../css/style_1.css" type="text/css" />

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
		<div class="content-body1">
			<div class="left">
				<?php
					include ('content/admin_office_content1.php');
				?>
			</div>
			<div class="right-bar">
				<?php
					include ('include/right-bar.php');
				?>
			</div>
		</div>	
	</div>
</div>
<div id="footerDiv">
	<div id="footer">
		<?php
			include ('include/footer.php');
		?>
	</div>	
</div>
</body>
</html>
