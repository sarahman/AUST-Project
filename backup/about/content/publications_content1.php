<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]' AND item_heading = 'Publications'");
	$sql1 = mysql_query ("SELECT image_name FROM images WHERE image_type = 'publication'");
	
	$row = mysql_fetch_array ($sql);
	$row1 = mysql_fetch_array ($sql1);
	
	$path = '../images/pub/' . $row1 ['image_name'];
?>
<div class="heading1">
	<?php
		echo $row ['item_heading'];
	?>
</div>	
<div class="mid-content">
	<p>
		<img style="height:250px" src="<?php echo $path; ?>" />
	</p>
	<?php
		echo $row ['item_details'];
	?>
</div>