<?php
	include ('../dbconn/dbconn.php');
	
	if (isset ($_POST['submit']))
	{
		$sql = mysql_query ("update page_info set page_meta = '$_POST[meta_details]' where page_id = '$_POST[p_id]'");
		
		if ($sql)
			header ('Location:../about_manage.php');
		else
			die (mysql_error ());
	}			
?>