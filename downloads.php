<?php
include('incl_/mysql_c.php');
session_start();
if (!isset($_SESSION['isadmin'])) {
	$_SESSION['isadmin'] = 0;
}
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = "";
}
$pagename = "download";
$pagecontent = 'The downloads are not yet set up.
<br />
<a href="index.php"><b>Return Home</b></a>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PatheticTO - Downloads</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="web">
<?php include("incl_/menu.incl.php"); ?>
 <div id="container">
	<div class="center">Downloads</div>
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
  <div id="login">
  <div class="center">Status</div>
   <div class="sep"></div>
   <div id="loginstat" class="center">
   <?php
   if($_SESSION['user'] == ""){
		echo 'Not logged in!
		<br />
		<a href="login.php">Login</a> | <a href="register.php">Register</a>
		';
   }else{
   echo 'Logged in as ' . htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8') . '!
   <br />
   <a href="logout.php">Logout</a> | <a href="edit_account.php">Edit Account</a>';
   }
   ?>
  </div>
  </div>
  </div>
 </div>
</body>
</html>