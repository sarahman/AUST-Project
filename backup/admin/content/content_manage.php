<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/dropdownmenu.css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/ddaccordion.js"></script>
<title>Aust Administrator</title>
<style type="text/css">
</style>

<script type="text/javascript">
//Initialize 2nd demo:
ddaccordion.init({
	headerclass: "title", //Shared CSS class name of headers group
	contentclass: "list", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: false, //persist state of opened contents within browser session?
	toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	//togglehtml: ["prefix", "<img src='http://i13.tinypic.com/80mxwlz.gif' style='width:13px; height:13px' /> ", "<img src='http://i18.tinypic.com/6tpc4td.gif' style='width:13px; height:13px' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
</head>

<body>
<?php
if (!isset ($_COOKIE['uname']) && !isset ($_COOKIE['upass']))
	header ('Location:../login.php');
else
{	
?>
<div id="wrapper">
	<div class="header">
		<div class="logo">
			<a href="../index.php"><img class="reflex itiltnone iopacity50" src="../images/logo.gif" /></a>
		</div>
	</div>
	<span class="logout">
		<a href="../logout.php">logout</a>
	</span>
	<div class="nav-bar">
		<ul>
			<li>
				<a href="../index.php">Site Manager</a>
			</li>
			<li>
				<a href="#">Content Manager</a>
			</li>
			<li>
				<a href="#">User Manager</a>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="headline">
			<h2>Page Management</h2>
		</div>
		<div class="contentDiv">
			<div class="content">
				<table border="0" class="con_manage_table" cellpadding="0" cellspacing="0">
					<tr>
						<th>
							<span class="link">
								Page Title
							</span>
							<span class="option">	
								Action
							</span>
						</th>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								homepage.php
							</span>	
							<span class="option">
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
								<span class="title">
									<span class="link">about.php</span>
								</span>
									<span class="option"><a href="../about/about_manage.php">edit</a> | <a href="#">view</a></span>
								<div class="list">
									<span class="link1">accreditation.php</span>
									<span class="option1"><a href="../about/accreditation/page_manage.php">edit</a> | <a href="#">view</a></span>
									<span class="link1">publication.php</span>
									<span class="option1"><a href="../about/publications/page_manage.php">edit</a> | <a href="#">view</a></span>
									<span class="link1">campus site.php</span>
									<span class="option1"><a href="../about/campus_site/page_manage.php">edit</a> | <a href="#">view</a></span>
								</div>
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								administration.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="title">
								<span class="link">admission.php</span>	
							</span>
								<span class="option"><a href="../admission/page_manage.php">edit</a> | <a href="#">view</a></span>	
							<div class="list">	
								<span class="link1">undergraduate studies.php</span>
								<span class="option1"><a href="../admission/un_grad/page_manage.php">edit</a> | <a href="#">view</a></span>	
								<span class="link1">graduate studies.php</span>
								<span class="option1"><a href="../admission/grad/page_manage.php">edit</a> | <a href="#">view</a></span>	
							</div>
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								academics.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								faculty.php
							</span>	
							<span class="option">
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								student's corner.php
							</span>
							<span class="option">		
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								alumni.php
							</span>
							<span class="option">		
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								news.php
							</span>
							<span class="option">	
								<a href="../news/news_manager.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">
								events.php
							</span>
							<span class="option">	
								<a href="../events/events_manager.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								gallery.php
							</span>
							<span class="option"	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								international.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								carrer.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#C9DFB5">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								research.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
					<tr style="background:#E6EFDE">
						<td style="padding:5px 0 5px 10px;color:#0066FF">
							<span class="link">	
								contact us.php
							</span>
							<span class="option">	
								<a href="../hom/hom_manage.php">edit</a> | <a href="#">view</a>
							</span>	
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>
