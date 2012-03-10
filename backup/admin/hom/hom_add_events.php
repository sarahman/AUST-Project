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
					<form action="content/add_events.php" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Add Events</legend>
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
											<label>Add Title:</label>
										</td>
										<td>
											<textarea name="e_title">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>
											<label>Add Details:</label>
										</td>
										<td>
											<textarea name="e_details" rows="15">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>
											<label>Date:</label>
										</td>
										<td>
											<input type="text" name="e_date" size="20" value="<?php echo date ("M d") ?>" />
										</td>
									</tr>
									<tr>
										<td>
											<label>Event Type:</label>
										</td>
										<td>
											<select name="e_type" style="width:100px">
												<option value="1">General</option>
												<option value="2">Department</option>
											</select>
										</td>
									</tr>		
									<tr>
										<td colspan="2">
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
