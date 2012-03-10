<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	if (isset ($_POST['submit']))
	{
		$content = $_POST['bcontent'];
		$sql = mysql_query ("UPDATE page_item SET item_details = '$content' WHERE page_id = '1' AND item_heading = 'banner'");
		if ($sql)
		{	
			header ('Location:../hom_banner.php');	
		}	
		else 
			die (mysql_error());		
	}
?>
