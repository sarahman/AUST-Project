<?php
	$con = mysql_connect ("localhost","root","commonrbs") or die (mysql_error ());
	
	$db = mysql_select_db ('aust') or die (mysql_error());
?>