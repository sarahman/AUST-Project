<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("select * from news where news_id = '$_GET[n_id]'");
	
	if ($sql)
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
			<h2>News Maneger</h2>
		</div>
		<div class="left">
			<?php 
				include ('include/left.php');
			?>
		</div>
		<div class="right">
			<div class="contentDiv">
				<div class="content">
					<form action="content/update_news.php" method="post">
					<fieldset>
						<legend>Edit News</legend>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td>
											<label>Page Title:</label>
										</td>
										<td>
											<i style="color:#993300">News</i>
										</td>
									</tr>
									<tr>
										<td>
											<label>News Title:</label>
										</td>
										<td>
											<textarea name="n_title" rows="2"><?php echo $row['news_title']; ?></textarea>
										</td>
									</tr>
									<tr>
										<td>
											<label>News Details:</label>
										</td>
										<td>
											<textarea name="n_details" rows="15"><?php echo $row['news_details']; ?></textarea>
										</td>
									</tr>
									<tr>
										<td>
											<label>News Date:</label>
										</td>
										<td>
											<input type="text" name="n_date" value="<?php echo $row['news_date']; ?>" />
										</td>
									</tr>
									<tr>
										<td>
											<label>News Type:</label>
										</td>
										<td>
											<select name="n_type">
												<option value="1">General</option>
												<option value="2">Deparment</option>
												<option value="3">Student</option>
												<option value="4">Others</option>
											</select>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="hidden" name="n_id" value="<?php echo $row['news_id']; ?>" />
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
