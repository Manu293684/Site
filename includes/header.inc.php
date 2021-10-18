
<div class="header">
	<div class="container">
		<div class="nav" >
			<ul style="text-align: center; font-size:200%;" style="float: left;">
				<li><a href="index.php">LOG IN</a></li>
				<?php
					if (!isset($_SESSION['id'])) {
						echo '<li><a href="signup.php">SIGN UP</a></li>';
					}
				?>
			</ul>
		</div>
	</div>
</div>