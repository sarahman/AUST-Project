<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	if (isset($_GET['i_no']))
	{
		echo $_GET['i_no'];
		
		$sql = mysql_query ("DELETE FROM images WHERE image_no = '$_GET[i_no]'");
		
		if ($sql)
			header ('Location:../hom_manage_slideshow.php');
		else
			die (mysql_error());	
	}
?>