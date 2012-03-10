<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]' AND item_heading = 'founder'");
	$sql1 = mysql_query ("SELECT image_name FROM images WHERE image_type = 'about'");
	
	$row = mysql_fetch_array ($sql);
	$row1 = mysql_fetch_array ($sql1);
	
	$path = '../images/' . $row1 ['image_name'];
?>
<div class="headline">
	<h3>
		<?php echo $row['item_heading']; ?>
	</h3>
</div>
<div class="right-content">
	<div class="img">
		<img src="<?php echo $path; ?>" width="200" />
	</div>
	<div class="box">	
		<?php echo $row ['item_details']; ?>	
	</div>
</div>	