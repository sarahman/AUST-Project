<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT item_heading,item_details FROM page_item WHERE page_id = '$_GET[page_id]'");
	$sql1 = mysql_query ("SELECT image_name,image_caption FROM images WHERE image_type = (SELECT page_title FROM page_info WHERE page_id = $_GET[page_id])");
	
	$row1 = (mysql_fetch_array ($sql1));
	$path = '../images/' . $row1 ['image_name']; 
	$no = mysql_num_rows ($sql);
	for ($i = 0; $i < $no; $i++)
	$row[$i] = mysql_fetch_array ($sql);
?>
<div class="headline">
	<h2>
		<?php echo $row[0]['item_heading']; ?>
	</h2>
</div>
<div class="details">
	<div class="img">
		<img src="<?php echo $path; ?>" width="336"  />
	</div>	
	<div class="txt">
		<?php
			echo $row[0]['item_details'];
		?>
	</div>
	<div class="syndicate">
		<div class="headline">
			<?php echo $row[1]['item_heading']; ?>
		</div>
		<div class="bio">
			<?php echo $row[1]['item_details']; ?>
		</div>			
	</div>
</div>