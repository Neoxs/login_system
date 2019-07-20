<?php 
	include_once "header.php";
?>

	<main>
		<?php 
			if (isset($_SESSION["userId"])) {
				 echo "<div class='alert alert-success' role='alert'>
							<h4 class='alert-heading'>WELCOME AGAIN!</h4>
							<p>Aww yeah, you successfully login in our website !!!</p>
							<hr>
						</div>";
			}
			else {
				echo "<div class='alert alert-dark' role='alert'>
					  You have just log out!
					</div>";
			}
		?>
	</main>

<?php 
	require "footer.php";
?>