<?php 
	include ("../dbconn/dbconn.php");

if (isset ($_POST['submit']))
{
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png', '.JPG', '.doc', '.xls'); 
      $max_filesize = 5242880; 
      $upload_path = '../../../images/campus/'; 
 
   	$filename = $_FILES['slideimage']['name']; 
   	$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
 
   
   if(!in_array($ext,$allowed_filetypes))
      die('The file you attempted to upload is not allowed.');
 
   
   if(filesize($_FILES['slideimage']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
   	if(move_uploaded_file($_FILES['slideimage']['tmp_name'],$upload_path . $filename))
    {	
		$sql = mysql_query("INSERT INTO images (image_name,image_caption,image_type) values ('$filename','$_POST[icaption]','home');");
		
		if ($sql)
			header ('Location:../hom_add_image.php');
	}	 
		 
	else
    	echo 'There was an error during the file upload.Please try again.'; 
}
?>