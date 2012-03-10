<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]'");
	$sql1 = mysql_query ("SELECT image_name,image_caption FROM images WHERE image_type = (SELECT page_title FROM page_info WHERE page_id = $_GET[page_id])");
	
	$row1 = mysql_fetch_array ($sql1);
	$path = '../images/' . $row1 ['image_name'];
?>
<div class="headline">
	<h2>Adiministrative Office</h2>
</div>
<div class="details">
	<div class="img">
		<img src="<?php echo $path; ?>" width="590" height="294" />
	</div>	
	<div class="syndicate">
	<?php
		while ($row = mysql_fetch_array ($sql))
		{
	?>
			<div class="headline">
				<?php echo $row ['item_heading']; ?>	
			</div>
			<div class="address">
				<?php echo $row ['item_details']; ?>
			</div>
	<?php
		}
	?>			
	</div>
</div>