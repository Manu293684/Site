<?php

	session_start();
	if (isset($_SESSION['id'])) {
		header("Location: index.php");
	}
	
	require 'includes/head.inc.php';
	require 'includes/header.inc.php';

?>

	<div class="login-box">
			<h2>Crează-ți un cont!</h2>
			<form method="POST" action="includes/signup.inc.php">
			<div class="user-box">
				<input type="text" name="nume" placeholder="Nume">
				<label>Nume</label>
            </div>
			<div class="user-box">
				<input type="text" name="prenume" placeholder="Prenume">
				<label>Prenume</label>
            </div>
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
      <input type="submit" value="Sign up">
    </a>
			</form>
			<?php
				if (isset($_GET['info']) && $_GET['info'] == 'ok') {
					echo '<p style="text-align: center; color: green; font-size: 20px;">Contul a fost creat cu succes.</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">A aparut o eroare.</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
					echo '<p style="text-align: center; color: red; font-size: 20px;">Usernameul exista deja.</p>';
				}
			?>
	</div>

