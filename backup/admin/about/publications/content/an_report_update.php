<?php
	include ('../dbconn/dbconn.php');
	
	if (isset ($_POST['submit']))
	{
		$sql = mysql_query ("update page_item set item_heading = '$_POST[title]',item_details = '$_POST[details]' where item_no = $_POST[i_no]");
		 
		if ($sql)
			header ('Location:../edit_right_1.php');
		else
			die (mysql_error ());
	}			 
?>