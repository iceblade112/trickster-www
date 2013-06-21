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
	<title>PatheticTO - Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="web">
<?php include("incl_/menu.incl.php"); ?>

 <div id="container">
This is a 404. That means this page wasn't found. Now go home.
</div>
<?php include("incl_/status.incl.php"); ?>
 </div>
</body>
</html>