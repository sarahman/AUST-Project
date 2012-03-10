<?php
	include ('../dbconn/dbconn.php');
	
	$sql = mysql_query ("insert into events (event_title,event_details,event_date,event_type) values ('$_POST[e_title]','$_POST[e_details]','$_POST[e_date]','$_POST[e_type]')");
	if ($sql)
		header ('Location:../hom_add_events.php');
	else
		die (mysql_error ());	 
?>