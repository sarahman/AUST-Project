<?php
	include ('dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT DISTINCT(item_heading),item_details FROM page_item WHERE item_heading = 'Aust Leadership'");
	$s = mysql_query ("SELECT image_name FROM images WHERE image_type = 'home_leadership'");
	
	$n = mysql_num_rows ($s);
	$no = mysql_num_rows ($sql);
	
	for ($i = 0;$i < $no;$i++)
		$row[$i] = mysql_fetch_array($sql);
		
	for ($a = 0;$a < $n;$a ++)
		$r[$a] = mysql_fetch_array ($s);	
?>
<div class="heading2">
	<?php
		echo $row[0] ['item_heading'];
	?>
</div>	
<div class="box">
<?php
	for ($i = 0,$a = 0;$i < $no,$a < $n;$i++,$a ++)
	{ $path = 'images/leadership/' . $r[$a]['image_name']; 
?>	
	<ul>
		<li>
			<div class="img"><img src="<?php echo $path; ?>" width="60" height="70" /></div> <?php echo $row[$i] ['item_details']; ?>
		</li>
	</ul>
<?php
	}
?>
</div>
