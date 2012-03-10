<?php
	include ('../dbconn/dbconn.php');
	
	if (isset ($_GET['i_head']))
	{
		$sql = mysql_query ("delete from page_item where item_heading = '$_GET[i_head]'");
		$sql_f = mysql_query ("delete from files where file_type = '$_POST[i_head]'");
		$sql_i = mysql_query ("delete from images where image_type = '$_POST[i_head]'");
		if ($sql && $sql_f && $sql_i)
			header ('Location:../edit_right_1.php');
		else
			die (mysql_error ());
	}			
?>