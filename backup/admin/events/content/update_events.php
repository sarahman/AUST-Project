<?php
	include ('../dbconn/dbconn.php');
	
	$sql = mysql_query ("update events set event_title = '$_POST[e_title]',event_details = '$_POST[e_details]',event_date = '$_POST[e_date]',event_type = '$_POST[e_type]' where event_id = '$_POST[e_id]'");
	if ($sql)
		header ('Location:../manage_events.php');
	else
		die (mysql_error ());	 
?>