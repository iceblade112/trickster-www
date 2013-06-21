<?php
include('incl_/mysql_c.php');
session_start();
if (!isset($_SESSION['isadmin'])) {
	$_SESSION['isadmin'] = 0;
}
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = "";
}
$pagename = "develop_progress";
$pagecontent = '<div class="uxsep"></div>
Translating UI: 0.3%
<div class="uxsep"></div>
Translating Items: 0.08%
<div class="uxsep"></div>
Translating NPCs: 0%
<div class="uxsep"></div>
Translating Maps: 0%
<div class="uxsep"></div>
Updating Client: 0%
<div class="uxsep"></div>
Updating Server: 0%
<div class="uxsep"></div>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PatheticTO - Development Progress</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="web">
<?php include("incl_/menu.incl.php"); ?>

 <div id="container">
	<div class="center">Development Progress</div>
	<div class="sep"></div>
	<br />
	<?php
	if($_SESSION['user'] == ""){
		echo 'You must login to view the page ' . $pagename . '.';
	} else {
		echo $pagecontent;
	}
	?>
 </div>

 <div id="right">
<?php include("incl_/status.incl.php"); ?>
  </div>
 </div>
</body>
</html>