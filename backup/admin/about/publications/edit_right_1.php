<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT * FROM page_item WHERE page_id = (select page_id from page_info where page_title = 'annual_report') order by item_no desc");
	//$row = mysql_fetch_array ($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script type="text/javascript" src="../../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../../tinymce/toolbar.js"></script>

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
			<h2>publications.php</h2>
		</div>
		<div class="left">
			<?php
				include ('include/left.php');
			?>
		</div>
		<div class="right">
			<div class="contentDiv">
				<div class="content">
					<form action="content/right_update.php" method="post">
					<fieldset>
						<legend>Manage annual reports.php</legend>
								<table border="0">
									<tr>
										<th>
											Item_heading
										</th>
										<th>
											Actions
										</th>
									</tr>
									<?php
										while ($row = mysql_fetch_array ($sql))
										{
									?>
									<tr>
										<td style="width:400px">
											<?php echo $row ['item_heading']; ?>
										</td>
										<td style="width:100px">
											<a href="edit_an_report.php?i_head=<?php echo $row ['item_heading']; ?>">edit</a>&nbsp;|&nbsp;<a href="content/del_an_report.php?i_head=<?php echo $row ['item_heading']; ?>">delete</a>
										</td>
									</tr>
									<?php
										}
									?>
									<tr>
										<td colspan="2">
											<center><a href="add_an_report.php">add more</a></center>
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
