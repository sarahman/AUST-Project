<?php
	include ('../dbconn/dbconn.php');
	
	$sql = mysql_query ("insert into events (event_title,event_details,event_date,event_time,event_type) values ('$_POST[n_title]','$_POST[n_details]','$_POST[n_date]','$_POST[n_time]','$_POST[n_type]')");
	if ($sql)
		header ('Location:../add_events.php');
	else
		die (mysql_error ());	 
?>