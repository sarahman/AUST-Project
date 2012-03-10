<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]' AND item_heading != 'founder'");
	
	while ($row = mysql_fetch_array ($sql))
	{
?>
<div class="heading1">
	<?php
		echo $row ['item_heading'];
	?>				
</div>	
<div class="mid-content">
	<?php
		echo $row ['item_details'];
	?>
</div><br />
<?php
	}
?>