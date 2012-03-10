<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	$sql = mysql_query ("SELECT f_no,f_name FROM faculty  LIMIT 0,4");
	
	$page = array ("ce/ce","cse/cse","eee/eee","ipe/ipe","tt/tt","ma/math","archi/archi","bba/bba","bba/mba","edu/bed","edu/med");
	
	while ($row = mysql_fetch_array ($sql))
	{
?>
<p>
	<ul><?php echo $row['f_name']; ?>
		<?php
			$sql1 = mysql_query ("SELECT d_p_name FROM dept_program WHERE f_no = '$row[f_no]'");
			
			while ($row1 = mysql_fetch_array ($sql1))
			{ 
		?>
		<li>
			<a href="<?php echo current($page); ?>.php"><?php echo $row1 ['d_p_name']; ?></a>
		</li>
		<?php
			next ($page);
			}
		?>
	</ul>
</p>
<?php
	}
?>