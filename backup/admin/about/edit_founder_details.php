<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("select item_heading,item_details from page_item where item_no = 5");
	$row = mysql_fetch_array ($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/reflex.js"></script>
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../tinymce/toolbar.js"></script>

<title>Aust Administrator</title>
</head>

<body>
<?php
if (!isset ($_COOKIE['uname']) && !isset ($_COOKIE['upass']))
	header ('Location:../login.php');
else
{	
?>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<a href="../index.html"><img class="reflex itiltnone iopacity50" src="../images/logo.gif" /></a>
		</div>
	</div>
	<span class="logout">
		<a href="../logout.php">logout</a>
	</span>
	<div class="nav-bar">
		<?php
			include ('include/nav-bar.php');
		?>
	</div>
	<div class="container">
		<div class="headline">
			<h2>About.php</h2>
		</div>
		<div class="left">
			<?php
				include ('include/left.php');
			?>
		</div>
		<div class="right">
			<div class="contentDiv">
				<div class="content">
					<form action="content/founder_update.php" method="post">
					<fieldset>
						<legend>Manage About.php</legend>
								<table border="0">
									<tr>
										<td>
											<label>Heading:</label>
										</td>
										<td>
											<input type="text" name="title" value="<?php echo $row['item_heading']; ?>" />
										</td>
									</tr>
									<tr>
										<td>
											<label>Image:</label>
										</td>
										<td>
											<img src="../images/imgg03.png" width="120" height="140" />
										</td>
									</tr>
									<tr>
										<td>
											<label>Text:</label>
										</td>
										<td>
											<textarea name="details">
												<?php echo $row['item_details']; ?>
											</textarea>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="hidden" name="i_no" value="5" />
											<input class="button" type="submit" name="submit" value="save" />
										</td>
									</tr>
								</table>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>
