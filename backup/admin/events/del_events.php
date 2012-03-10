<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("delete from events where event_id = '$_GET[e_id]'");
	
	if ($sql)
		header ('Location:../manage_events.php');
	else
		die (mysql_error ());	
		
?>