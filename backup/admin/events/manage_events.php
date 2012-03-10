<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("select event_id,event_title,event_date from events order by event_id desc");
	
	$n = mysql_num_rows ($sql);
	for ($i = 0;$i < $n;$i ++)
		$row[$i] = mysql_fetch_array ($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/reflex.js"></script>
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
			<h2>event Maneger</h2>
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
						<legend>Manage event</legend>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<th>
											Id
										</th>
										<th>
											event Title
										</th>
										<th>
											event date
										</th>
										<th>
											Actions
										</th>
									</tr>
									<?php
									for ($i = 0;$i < $n;$i ++)
									{
									?>
									<tr>
										<td>
											<p>
												<?php echo $row[$i]['event_id']; ?>
											</p>
										</td>
										<td style="width:400px; font-size:11px;">
											<p><?php echo $row[$i]['event_title']; ?>
											</p>
										</td>
										<td style="width:80px;">
											<p>
												<?php echo $row[$i]['event_date']; ?>
											</p>
										</td>
										<td style="width:100px;">
											<a href="edit_events.php?e_id=<?php echo $row[$i]['event_id']; ?>">edit</a> | <a href="del_events.php?e_id=<?php echo $row[$i]['event_id']; ?>">delete</a>
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
