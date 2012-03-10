<?php
	include ('../dbconn/dbconn.php');
	//echo $_POST['title'] . $_POST['ufile'] . $_POST['u_image'];
	$up_file = $_POST['ufile'];$up_image = $_POST['u_image'];
	if (isset ($_POST['submit']))
	{	//echo "value=" . $_POST['submit'] . $_POST['title'] . $_POST['ufile'] . $_POST['u_image'];
		if (!empty ($up_file))
		{	//echo $_POST['ufile'] . $_POST['u_image'];
			$allowed_filetypes1 = array('.DOC','.docx','.DOCX', '.doc','.pdf','.PDF', '.xls'); // These will be the types of file that will pass the validation.
      		$max_filesize1 = 5242880; // Maximum filesize in BYTES (currently 5.0MB).
      		$upload_path1 = '../../../../images/pub/'; // The place the files will be uploaded to (currently a 'files' directory).
 
  			$filename1 = $_FILES['ufile']['name']; // Get the name of the file (including file extension).
   			$ext1 = substr($filename1, strpos($filename1,'.'), strlen($filename1)-1); // Get the extension from the filename.
 
  			// Check if the filetype is allowed, if not DIE and inform the user.
   			if(!in_array($ext1,$allowed_filetypes1))
			{
      			die('<b style="color:#FF0000">The file you attempted to upload is not allowed.</b>');
 				echo $filename1 . $ext1;
			}
   			// Now check the filesize, if it is too large then DIE and inform the user.
   			elseif(filesize($_FILES['ufile']['tmp_name']) > $max_filesize1)
      			die('<b style="color:#FF0000">The file you attempted to upload is too large.</b>');
 
   			// Check if we can upload to the specified path, if not DIE and inform the user.
   			elseif(!is_writable($upload_path1))
      			die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   			// Upload the file to your specified path.
   			elseif(!move_uploaded_file($_FILES['ufile']['tmp_name'],$upload_path1 . $filename1))
        		echo '<b style="color:#FF0000">There was an error during the file upload.  Please try again.</b>'; // It failed :(.
			else
			{
				$sql_f = mysql_query ("INSERT INTO files (file_name,file_type,page_id) VALUES ('$filename1','$_POST[title]',5)");
				if (!sql_f)
					die (mysql_error ());
			}	
		}
		/*if (!empty ($up_image))
		{
			$allowed_filetypes = array('.jpg','.gif','.bmp','.png', '.JPG', ); // These will be the types of file that will pass the validation.
     		$max_filesize = 5242880; // Maximum filesize in BYTES (currently 5.0MB).
      		$upload_path = '../../../../images/pub/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   			$filename = $_FILES['u_image']['name']; // Get the name of the file (including file extension).
   			$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
		   	// Check if the filetype is allowed, if not DIE and inform the user.
		   	if(!in_array($ext,$allowed_filetypes))
				die('The file you attempted to upload is not allowed.');
		 
		   	// Now check the filesize, if it is too large then DIE and inform the user.
		   	elseif(filesize($_FILES['u_image']['tmp_name']) > $max_filesize)
			  	die('The file you attempted to upload is too large.');
		 
		   	// Check if we can upload to the specified path, if not DIE and inform the user.
		   	elseif(!is_writable($upload_path))
			  	die('You cannot upload to the specified directory, please CHMOD it to 777.');
		 
		   	// Upload the file to your specified path.
		   	elseif(!move_uploaded_file($_FILES['u_image']['tmp_name'],$upload_path . $filename))
			  	echo 'There was an error during the file upload.  Please try again.';
			else
			{
				$sql_i = mysql_query ("INSERT INTO images (image_name,image_type) VALUES ('$filename','$_POST[title]')");
				if (!sql_i)
					die (mysql_error ());
				$sql = mysql_query ("INSERT INTO page_item (item_heading,item_details,page_id) VALUES ('$_POST[title]','$_POST[details]',5)");
			}				
		}*/	
		
		//header ('Location:../edit_right_1.php');
	}		
?>