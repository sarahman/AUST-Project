<?php
	include ('../dbconn/dbconn.php');
?>

<?php
	if (isset ($_POST['submit']))
	{
		$sql = mysql_query ("UPDATE page_info SET page_meta = '$_POST[meta_details]' WHERE page_id = '1'");
		
		if ($sql)
			header ('Location:../hom_manage.php');
		else
			die (mysql_error ());	
	}
?>