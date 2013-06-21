	<?php
$data = $mysqli->query("SELECT * FROM news ORDER BY tstamp DESC") or die(mysql_error());
$num_rows = mysqli_num_rows($data);

while($row = mysqli_fetch_array($data)){
	if($row['type'] == "1") {
		echo '<img style="vertical-align:middle;" src="img/news.png">';
	}
	if($row['type'] == "2") {
		echo '<img style="vertical-align:middle;" src="img/update.png">';
	}
	if($row['type'] == "3") {
		echo '<img style="vertical-align:middle;" src="img/event.png">';
	}
	if(isset($_GET['ts'])){
		$ts = ' | Date and Time: ' . $row['tstamp'];
	}else{
	$ts = "";
	}
  echo '<a href="page.php?pageid=' . $row['id'] . '"> '. $row['title']  .$ts . '</a>' . '</img>';
  echo '<br />';
 }

?>