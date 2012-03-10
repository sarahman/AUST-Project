<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/reflex.js"></script>
<title>Aust Administrator</title>
</head>

<body>
<?php
if (!isset ($_COOKIE['uname']) && !isset ($_COOKIE['upass']))
	header ('Location:login.php');
else
{	
?>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img class="reflex itiltnone iopacity50" src="images/logo.gif" /></a>
		</div>
	</div>
	<span class="logout"><a href="logout.php">Logout</a></span>
	<div class="nav-bar">
		<?php
			include ('include/nav-bar.php');
		?>
	</div>
	<div class="container">
		<div class="headline">
			<h2>Control Panel</h2>
		</div>
		<div class="contentDiv">
			<div class="content">
					<table class="con_manage_table" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td style="background:#E6EFDE; padding:5px 0 5px 20px;">
								<a href="hom/hom_manage.php">Homepage Manager</a>
							</td>
						</tr>
						<tr>
							<td style="background:#C9DFB5; padding:5px 0 5px 20px;">
								<a href="news/news_manager.php">Add News</a>
							</td>
						</tr>
						<tr>
							<td style="background:#E6EFDE; padding:5px 0 5px 20px;">
								<a href="#">Add Events</a>
							</td>
						</tr>
						<tr>
							<td style="background:#C9DFB5; padding:5px 0 5px 20px;">
								<a href="#">Publish Result</a>
							</td>
						</tr>
						<tr>
							<td style="background:#E6EFDE; padding:5px 0 5px 20px;">
								<a href="#">Gallery Management</a>
							</td>
						</tr>
						<tr>
							<td style="background:#C9DFB5; padding:5px 0 5px 20px;">
								<a href="#">Faculty Management</a>
							</td>
						</tr>
						<tr>
							<td style="background:#E6EFDE; padding:5px 0 5px 20px;">
								<a href="#">Student's Corner</a>
							</td>
						</tr>
					</table>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>
