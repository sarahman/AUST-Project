<?php
	include ('../dbconn/dbconn.php');
	
	$sql = mysql_query ("insert into news (news_title,news_details,news_date,news_type) values ('$_POST[n_title]','$_POST[n_details]','$_POST[n_date]','$_POST[n_type]')");
	if ($sql)
		header ('Location:../hom_add_news.php');
	else
		die (mysql_error ());	 
?>