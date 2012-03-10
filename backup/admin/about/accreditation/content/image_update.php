<?php 
	include ("../dbconn/dbconn.php");
?>
<?php
   // Configuration - Your Options
   if (isset ($_POST['submit']))
   {
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png', '.JPG',); // These will be the types of file that will pass the validation.
      $max_filesize = 5242880; // Maximum filesize in BYTES (currently 5.0MB).
      $upload_path = '../../../../images/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['image']['name']; // Get the name of the file (including file extension).
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('<b style="color:#FF0000">The file you attempted to upload is not allowed.</b>');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['image']['tmp_name']) > $max_filesize)
      die('<b style="color:#FF0000">The file you attempted to upload is too large.</b>');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(!move_uploaded_file($_FILES['image']['tmp_name'],$upload_path . $filename))
        //echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
		 
   //else
		echo '<b style="color:#FF0000">There was an error during the file upload.  Please try again.</b>'; // It failed :(.
 
		$file =  $upload_path . $filename;
		$sql = mysql_query ("update images set image_name = '$filename' where image_no = $_POST[im_no]");
		header ('Location:../edit_image.php');
	}	
?>