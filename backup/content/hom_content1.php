<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT * FROM page_info,page_item WHERE page_info.page_id = page_item.page_id");
	
	$row = mysql_fetch_array ($sql);
	
	echo $row ['item_details'];
?>