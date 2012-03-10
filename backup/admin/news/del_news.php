<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("delete from news where news_id = '$_GET[n_id]'");
	
	if ($sql)
		header ('Location:../manage_news.php');
	else
		die (mysql_error ());	
		
?>