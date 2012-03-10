<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("select item_heading,item_details from page_item where page_id = '$_GET[page_id]'");
	
	$row = mysql_fetch_array ($sql);
?>
<div class="headline">
	<?php
		echo $row ['item_heading'];
	?>	
</div>
<div class="mid-content">
	<div class="contentDiv">
		<?php
			echo $row ['item_details'];
		?>
	</div>	
</div>
