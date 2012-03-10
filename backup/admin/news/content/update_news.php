<?php
	include ('../dbconn/dbconn.php');
	
	$sql = mysql_query ("update news set news_title = '$_POST[n_title]',news_details = '$_POST[n_details]',news_date = '$_POST[n_date]',news_type = '$_POST[n_type]' where news_id = '$_POST[n_id]'");
	if ($sql)
		header ('Location:../manage_news.php');
	else
		die (mysql_error ());	 
?>