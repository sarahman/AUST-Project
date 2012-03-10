<?php
	include ('dbconn/dbconn.php');
	echo $_GET['e_id'];
	$sql = mysql_query ("delete from events where event_id = '$_GET[e_id]'");
	
	if ($sql)
		header ('Location:hom_manage_spotlight.php');
	else 
		die (mysql_error ());	
?>