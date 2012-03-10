<?php
	include ('dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("select image_no,image_name,image_caption from images where image_type = 'home' order by image_no desc");
	$no = mysql_num_rows ($sql);	
	for ($i=0;$i < $no;$i++)
		$row[$i] = mysql_fetch_array ($sql); 	
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
					<form action="#" method="post">
					<fieldset>
						<legend>Manage Slideshow</legend>
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

										</td>
									<?php
										for ($i = 0;$i < $no;$i++)
										{
											$path = '../../images/campus/' . $row [$i]['image_name'];
									?>
									</tr>
										<td>
											<label><?php echo $row[$i]['image_name']; ?></label>
										</td>
										<td>
											<img src="<?php echo $path; ?>" width="50" height="40" />
										</td>
										<td>
											<i><?php echo $row[$i]['image_caption']; ?></i>
										</td>
										<td>
											<a href="hom_edit_slide.php?i_no=<?php echo $row[$i]['image_no']; ?>">edit</a> | <a href="content/hom_slide_del.php?i_no=<?php echo $row[$i]['image_no'] ?>">delete</a>
										</td>
									<tr>
									<?php
										}
									?>
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
