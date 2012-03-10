<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT * FROM page_info WHERE page_title = 'publication'");
	$row = mysql_fetch_array ($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<title>Aust Administrator</title>
</head>

<body>
<?php
if (!isset ($_COOKIE['uname']) && !isset ($_COOKIE['upass']))
	header ('Location:../../login.php');
else
{	
?>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<a href="../../index.php"><img class="reflex itiltnone iopacity50" src="../../images/logo.gif" /></a>
		</div>
	</div>
	<span class="logout">
		<a href="../../logout.php">logout</a>
	</span>
	<div class="nav-bar">
		<?php
			include ('include/nav-bar.php');
		?>
	</div>
	<div class="container">
		<div class="headline">
			<h2>publicaitons.php</h2>
		</div>
		<div class="left">
			<?php
				include ('include/left.php');
			?>
		</div>
		<div class="right">
			<div class="contentDiv">
				<div class="content">
					<form action="content/meta_update.php" method="post">
					<fieldset>
						<legend>Manage publications.php</legend>
								<table border="0">
									<tr>
										<td>
											<label>Page Title:</label>
										</td>
										<td>
											<i style="color:#993300">Publications</i>
										</td>
									</tr>
									<tr>
										<td>
											<label>Meta Keyword:</label>
										</td>
										<td>
											<input type="text" name="meta"/>
										</td>
									</tr>
									<tr>
										<td>
											<label>Meta Detatils:</label>
										</td>
										<td>
											<input type="text" name="meta_details" value="<?php echo $row ['page_meta'] ?>"/>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="hidden" name="p_id" value="<?php echo $row ['page_id'] ?>" />
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
