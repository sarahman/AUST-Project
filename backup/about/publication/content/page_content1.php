<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT page_item.item_heading,page_item.item_details,images.image_name,files.file_name FROM page_item,images,files WHERE page_item.page_id = '$_GET[page_id]' AND page_item.item_heading = images.image_type AND page_item.item_heading = files.file_type");
?>
<div class="heading1">
	<?php
		echo $row ['item_heading'];
	?>
</div>	
<div class="mid-content">
<?php
	while ($row = mysql_fetch_array ($sql))
	{
		$ipath = '../../images/pub/' . $row ['image_name'];
		$fpath = 'content/' . $row ['file_name'];
?>		
	<p>
		<img style="height:100px;width:80px" src="<?php echo $ipath; ?>" /><a href="<?php echo $fpath; ?>" style="padding:0 0 0 20px"><?php echo $row['item_heading']; ?></a>
	</p>
	<?php echo $row ['item_details']; ?>
<?php
	}
?>
</div>