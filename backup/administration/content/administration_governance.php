<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("select item_heading,item_details from page_item where page_id = '$_GET[page_id]' and item_details like  '%$_GET[title]%' ");
	$no = mysql_num_rows ($sql);
	
	for ($i=0;$i<$no;$i++)
		$row[$i] = mysql_fetch_array ($sql);
?>
<div class="headline">
	<h2><?php echo $row[0] ['item_heading']; ?></h2>
</div>
<div class="details">
<?php
	$i = 0;
	while ($row[$i])
	{
		$lk = trim ($row[$i]['item_details']);
		$sql1 = mysql_query ("SELECT l_no,l_title,l_item FROM list where l_title like '%$lk%' "); 
		$n = mysql_num_rows ($sql1);
		
?>
	<div class="syndicate">
		<ul>
			<?php
			?>
			<li>
				<p style="background:url(../images/member.gif) no-repeat left bottom;padding:6px 0 0 35px">
				<?php
					for ($a = 0;$a < $n;$a++)
						$row1[$a] = mysql_fetch_array ($sql1);
					echo $row1[0]['l_title'];
				?>
				</p>
				<ul>
					<?php
							for($a = 0;$a < $n;$a++)
							{
								echo $row1[$a]['l_item'];
							}	
					?>
				</ul>
			</li>
		</ul>		
	</div>
<?php
		$i++;
	}
?>	
</div>
