<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]' AND item_heading = 'Accreditation'");
	$sql1 = mysql_query ("SELECT image_name FROM images WHERE image_type = 'accreditation'");
	
	$row = mysql_fetch_array ($sql);
	$row1 = mysql_fetch_array ($sql1);
	
	$path = '../images/' . $row1 ['image_name'];
?>
<div class="heading1">
	<?php
		echo $row ['item_heading'];
	?>
</div>	
<div class="mid-content">
	<p>
		<img src="<?php echo $path; ?>" style="height:250px" />
	</p>
	<?php
		echo $row ['item_details'];
	?>
</div>