<?php
include('incl_/mysql_c.php');
session_start();
if (!isset($_SESSION['isadmin'])) {
	$_SESSION['isadmin'] = 0;
}
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PatheticTO - View All Announcements</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="web">
<?php include("incl_/menu.incl.php"); ?>

 <div id="container">
	<div class="center">All Announcements</div>
	<div class="sep"></div>
	<br />
<?php include("incl_/all_ann.incl.php"); ?>
<br />
</div>

 <div id="right">
	<?php include("incl_/status.incl.php"); ?>
	<?php include("incl_/all_ee.incl.php"); ?>
  </div>
 </div>
</body>
</html>