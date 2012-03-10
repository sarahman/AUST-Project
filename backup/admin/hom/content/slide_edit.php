<?php
	include ('../dbconn/dbconn.php');
?>
<?php
	if (isset($_POST['submit']))
	{
		$ino = $_POST['i_no'] . "<br/>";
		//setcookie ('ino',$ino,time () + 3600);
		session_start ();
		$_SESSION['i_no'] = $ino;
		$sql = mysql_query ("UPDATE `images` SET `image_caption` = '$_POST[icaption]' WHERE `image_no` = '$_SESSION[i_no]'");
		
		if ($sql)
			header ('Location:../hom_edit_slide.php');
		else 
			die (mysql_error ());	
	}
?>