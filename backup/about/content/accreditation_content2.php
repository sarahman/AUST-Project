<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]' AND item_heading = 'Aust Ranking'");
	
	$row = mysql_fetch_array ($sql);
?>
<div class="headline">
	<h3><?php echo $row['item_heading']; ?></h3>
</div>	
<div class="right-content">
	<div class="rank">
		<?php echo $row['item_details']; ?>
	</div>
</div>