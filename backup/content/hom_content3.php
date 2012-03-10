<?php
	include ('dbconn/dbconn.php');
	
	$sql = mysql_query ("SELECT news_title,news_date,news_time FROM news WHERE news_type = '1' ORDER BY news_id DESC LIMIT 0,4");
	
	while ($row = mysql_fetch_array ($sql))
	{
?>	
<div class="news-txt">
	<p>
		<a href="#">
			<?php
				echo $row ['news_title'];	
			?>			
		</a>
	</p>
</div>
<div class="date">
	<?php
		echo $row ['news_date'] . "<br/>" . $row['news_time'] ;
	?>	
</div>
<?php
	}
?>	