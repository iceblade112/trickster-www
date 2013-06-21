
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