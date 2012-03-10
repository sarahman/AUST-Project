<?php
	include ('../dbconn/dbconn.php');
	
	if (isset ($_POST['submit']))
	{
		$sql = mysql_query ("update page_item set item_heading = '$_POST[heading]',item_details = '$_POST[history]' where item_no = $_POST[i_no]");
		
		if ($sql)
			header ('Location:../edit_history.php');
		else
			die (mysql_error ());
	}			
?>