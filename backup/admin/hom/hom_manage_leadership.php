<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("select item_no,item_details from page_item where item_heading = 'Aust Leadership'");
	$s = mysql_query ("SELECT image_no,image_name FROM images WHERE image_type = 'home_leadership'");
	
	$n = mysql_num_rows ($sql);
	$no = mysql_num_rows ($s);
	
	for ($i = 0;$i < $n;$i ++)
		$row [$i] = mysql_fetch_array ($sql);
	for ($a = 0;$a < $no;$a ++)
		$r[$a] = mysql_fetch_array ($s);	
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
						<legend>Manage Leadership</legend>
								<table border="0">
								<?php
								for ($i = 0,$a = 0;$i < $n,$a < $no;$i ++,$a ++)
								{$path = '../../images/leadership/' . $r[$a]['image_name'];
								?>
									<tr>
										<td style="padding-right:20px;">
											<?php echo "<div class='img'><img src='$path' /></div>"; ?>
										</td>
										<td style="padding-right:20px">
											<?php echo $row[$i]['item_details']; ?>		
										</td>
										<td style="padding-right:20px">
											<a href="hom_edit_leadership.php?it_no=<?php echo $row[$i]['item_no']; ?>&i_no=<?php echo $r[$a]['image_no']; ?>">edit</a><!--&nbsp;&nbsp; | &nbsp;<a href="#">delete</a>-->
										</td>
									</tr>
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
