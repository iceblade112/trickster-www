<?php
include('incl_/mysql_c.php');
session_start();
if (!isset($_SESSION['isadmin'])) {
	$_SESSION['isadmin'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PatheticTO - <?php

		//mysql_real_escape_string($_GET['pageid'])
		$pid = ( isset( $_GET['pageid'] ) && is_numeric( $_GET['pageid'] ) ) ? intval( $_GET['pageid'] ) : 0; {
        //$pid = $_GET['pageid'];
		
        $data = $mysqli->query("SELECT * FROM news WHERE id='$pid'") or die(mysql_error());

        $num_rows = mysqli_num_rows($data);

        if ($num_rows == NULL) {
            echo('404');
        } else {

                   $info = mysqli_fetch_array( $data );
                   echo $info['title'];
		}
		}
		?></title>
	<link rel="stylesheet" type="text/css" href="css/pstyle.css" />
</head>
<body>
<div id="web">
<?php include("incl_/menu.incl.php"); ?>

 <div id="container">
<?php

		//mysql_real_escape_string($_GET['pageid'])
		$pid = ( isset( $_GET['pageid'] ) && is_numeric( $_GET['pageid'] ) ) ? intval( $_GET['pageid'] ) : 0; {
        //$pid = $_GET['pageid'];
		
        $data = $mysqli->query("SELECT * FROM news WHERE id='$pid'") or die(mysql_error());

        $num_rows = mysqli_num_rows($data);

        if ($num_rows == NULL) {
            echo('This page doesn\'t exist. That means this is a 404.');
        } else {

                   $info = mysqli_fetch_array( $data );
				   		if($info['type'] == "1") {
		echo '<img style="vertical-align:middle;" src="img/news.png">';
	}
	if($info['type'] == "2") {
		echo '<img style="vertical-align:middle;" src="img/update.png">';
	}
	if($info['type'] == "3") {
		echo '<img style="vertical-align:middle;" src="img/event.png">';
	}
                   echo $info['title'];
				   echo '</img> (Date: ';
                   echo $info['date'] . ')';
				   echo '
<div class="sepl"></div>
';
echo $info['content'] . '
</div>
</div>
';
        }
		}
		?>
</div>
</div>
</body>
</html>