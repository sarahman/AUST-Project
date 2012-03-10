<?php
	include ('dbconn/dbconn.php');
	$item = $_GET['it_no'];
	$ino = $_GET['i_no'];
	$sql = mysql_query ("select item_no,item_details from page_item where item_no = '$item'");
	$s = mysql_query ("SELECT image_no,image_name FROM images WHERE image_no = '$ino'");
	
		$row = mysql_fetch_array ($sql);
		$r = mysql_fetch_array ($s);
		$path = '../../images/leadership/' . $r['image_name'];
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
					<form action="#" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>Edit Leadership</legend>
								<table border="0">
									<tr>
										<td>
											Designation:
										</td>
										<td>
											<i style="color: #CC3300">Chancellor</i>
										</td>
									</tr>
									<tr>
										<td>
											Name:
										</td>
										<td>
											<textarea name="l_content" rows="15">
												<?php echo $row['item_details']; ?>
											</textarea>
										</td>
									</tr>
									<tr>
										<td>
											Photo :
										</td>
										<td>
											<img src="<?php echo $path; ?>" width="60" height="70" />
										</td>
									</tr>
									<tr>
										<td>
											Change Photo:
										</td>
										<td>
											<input type="file" name="image" />
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="hidden" name="item" value="<?php echo $row ['item_no']; ?>" />
											<input type="hidden" name="im_no" value="<?php echo $r ['image_no']; ?>" />
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
<?php
	if (isset ($_POST['submit']))
	{
		//$_POST['l_content'] . $_POST['item'];
		$sql = mysql_query ("update page_item set item_details = '$_POST[l_content]' where item_no = '$_POST[item]'");
		
		$allowed_filetypes = array('.jpg','.gif','.bmp','.png', '.JPG', '.PNG', '.GIF', '.BMP');
		$max_filesize = 5242880; 
        $upload_path = '../../images/leadership/'; 
 
   		$filename = $_FILES['image']['name']; 
   		$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
  
   		if(!in_array($ext,$allowed_filetypes))
      		die('<b style="color:#FF0000">The file you attempted to upload is not allowed.</b>');
  
   		if(filesize($_FILES['image']['tmp_name']) > $max_filesize)
      		die('<b style="color:#FF0000">The file you attempted to upload is too large.</b>');
			
		if(!move_uploaded_file($_FILES['image']['tmp_name'],$upload_path . $filename))
 			echo '<b style="color:#FF0000">There was an error during the file upload.Please try again.</b>'; // It failed :(.
 		
		else
		{	
			$sql1 = mysql_query ("update images set image_name = '$filename' where image_no = $_POST[im_no]");
			if ($sql && $sql1)
				header ('Location:hom_manage_leadership.php');
			else
				die (mysql_error ());
		}			
	}
?>