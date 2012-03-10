<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/reflex.js"></script>
<title>Aust Administrator</title>
</head>

<body>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<img class="reflex itiltnone iopacity50" src="images/logo.gif" />
		</div>
	</div>
	<div class="container">
		<div class="banner-txt">
			<h1 class="reflex">Welcome to Aust Admin Panel</h1>
		</div>
		<div id="loginDiv">
			<div class="loginpanel">
				<form action="#" method="post">
					<fieldset>
						<legend><h2>Administrator Login</h2></legend>
							<p><label>Username</label><br/>
							<input class="input-txt" type="text" name="u_name" /></p>
							<p><label>Password</label><br/>
							<input class="input-txt" type="password" name="u_pass" /></p>
							<p><button type="submit" name="submit"><img src="images/button01.gif" /></button></p>
							<?php
								include ('dbconn/dbconn.php');
									
								if (isset ($_POST['submit']))
								{
									$sql = mysql_query ("select * from admin_user where u_name = '$_POST[u_name]' and u_pass = '$_POST[u_pass]'");
									$row = mysql_num_rows ($sql);
									if ($row > 0)
									{
										setcookie ('uname','$_POST[u_name]',time () + 60*60);
										setcookie ('upass','$_POST[u_pass]',time () + 60*60);	
										header ('Location:index.php');
									}	
									else
										echo '<div class="error">Sorry,invaid username or password.</div>';	
								}
							?>
					</fieldset>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
