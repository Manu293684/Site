<?php
	session_start();
	require 'includes/head.inc.php';
	require 'includes/header.inc.php';

	if (!isset($_SESSION['id'])) {
		echo 
		'
		<div class="login-box">
				<h2>Ai deja un cont?</h2>
				<form method="POST" action="includes/login.inc.php">
				<div class="user-box">
					<input type="text" name="username" placeholder="Username">
					<label>Username</label>
				</div>
				<div class="user-box">
					<input type="password" name="password" placeholder="Parola">
					<label>Parola</label>
				</div>
					<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Log In">
    </a>
				</form>';
				if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">Parola introdusa este gresita.</p>';
				}
				echo'
			</div>
		</div>
	';
	} else {
		echo '<p style="text-align: center; font-family: Lato; font-size: 35px;padding-top: 100px;">Bine ai venit, '.$_SESSION['prenume'].'!';
		echo '
		
		<div class="login-box">
		<div class="user-box">
			<form action="includes/logout.inc.php" style="text-align: center;">
				<input type="submit" value="Log Out">
			</form>
		</div>
		<div class="user-box">
			<form action="home.php" style="text-align: center;">
				<input type="submit" value="Intra pe site">
			</form>
		</div>
		</div>
		';
	}
	
?>
 