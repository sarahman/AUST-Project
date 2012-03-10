<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("select item_no,item_heading,item_details from page_item where page_id = '$_GET[page_id]' order by item_no desc");
	
	$row = mysql_fetch_array ($sql);
?>
<div class="headline">
	<?php
		echo $row ['item_heading'];
	?>
</div>
<div class="left-bar">
	<div class="img">
		<img src="../images/academics.png" />
	</div>
	<div class="txt">
		<?php
			echo $row ['item_details'];
		?>
	</div>
</div>