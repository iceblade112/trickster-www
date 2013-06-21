  <div id="eemenu">
  <div class="center">Options</div>
   <div class="sep"></div>
   <div class="center">
   <?php
   	if(!isset($_GET['ts'])){
		echo '<a href="all.php?ts">Show date and time</a><br>';
	}else{
		echo '<a href="all.php">Hide date and time</a><br>';
	}
	?>
	
  </div>
  </div>