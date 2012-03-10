<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT image_no,image_name,image_caption FROM images WHERE image_type = 'home' ORDER BY image_no DESC");
	
	$no = mysql_num_rows ($sql);
	
	for ($i = 0;$i < $no;$i++)
		$row[$i] = mysql_fetch_array ($sql); 
?>	
	<ul id="pictures">	
		<?php
			for ($i = 0;$i < $no;$i++)
			{$path = 'images/campus/'. $row[$i] ['image_name'];
		?>	
		<li>
			<img src="<?php echo $path ?>" alt="<?php echo $row[$i] ['image_name']; ?>" width="400" height="250" />
		</li>
		<?php
			}
		?>
	</ul>
	<ul id="menu">
		<?php
			for ($i = 0;$i < $no;$i++)
			{//$path = 'images/cities/'. $row ['image_name'];
		?>	
		<li>
			<a href="<?php //echo $path ?>"><?php echo $row[$i] ['image_caption'] ?></a>
		</li>
		<?php
			}
		?>
	</ul>	
	