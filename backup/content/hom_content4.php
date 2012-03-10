<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT event_title FROM events WHERE event_type = '1' ORDER BY event_id DESC limit 0,3");
?>	
	<ul id="newsticker"><marquee scrollamount="1" direction="down" onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1">
<?php	
	while ($row = mysql_fetch_array ($sql))
	{
?>	
		<li>
			<a href="#">
				<?php
					echo $row ['event_title'];
				?>
			</a>
		</li>
<?php
	}
?>		</marquee>
	</ul>
