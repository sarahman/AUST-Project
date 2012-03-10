<?php
	include ('dbconn/dbconn.php');
	echo $_GET['n_id'];
	$sql = mysql_query ("delete from news where news_id = '$_GET[n_id]'");
	
	if ($sql)
		header ('Location:hom_manage_news.php');
	else 
		die (mysql_error ());	
	//$no = mysql_num_rows ($sql);
	//for ($i = 0;$i < $no;$i ++)
		//$row[$i] = mysql_fetch_array ($sql);
?>