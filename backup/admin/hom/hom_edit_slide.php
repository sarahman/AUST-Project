<?php
	include ('dbconn/dbconn.php');
?>
<?php
	session_start ();

	if (isset ($_GET['i_no']))
	{
		$sql = mysql_query ("select image_no,image_name,image_caption from images where image_no = '$_GET[i_no]'");
		$row = mysql_fetch_array ($sql);
	}	
	else if(isset ($_SESSION['i_no']))
	{

		$sql1 = mysql_query ("select image_no,image_name,image_caption from images where image_no = '$_SESSION[i_no]'");
		$row = mysql_fetch_array ($sql1);
	}	
	$path = '../../images/campus/' . $row['image_name'];
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
	header ('Location:login.php');
else
{	
?>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<a href="../index.php"><img class="reflex itiltnone iopacity50" src="../images/logo.gif" /></a>
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
			<h2>Homepage Maneger</h2>
		</div>
		<div class="left">
			<?php
				include ('include/left.php');
			?>
		</div>
		<div class="right">
			<div class="contentDiv">
				<div class="content">
					<form action="content/slide_edit.php" method="post">
					<fieldset>
						<legend>Edit Slideshow</legend>
								<table border="0">
									<tr>
										<td>
											<label>Page Title:</label>
										</td>
										<td>
											<i style="color:#993300">Homepage</i>
										</td>
									</tr>
									<tr>
										<td>
											<label>Image:</label>
										</td>
										<td>
											<img src="<?php echo $path; ?>" width="100" height="100" />
										</td>
									</tr>
									<tr>
										<td>
											<label>Image Caption:</label>
										</td>
										<td>
											<p style="padding-bottom:5px"><input type="text" name="icaption" value="<?php echo $row ['image_caption']; ?>" /></p>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input class="button" type="submit" name="submit" value="save" />
											<input type="hidden" value="<?php echo $row ['image_no']; ?>" name="i_no" />
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
<?php
	unset ($_SESSION['i_no']);
?>