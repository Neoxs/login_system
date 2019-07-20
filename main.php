<?php 
	include_once "header.php";
?>

	<main>
		<?php 
			if (isset($_SESSION["userId"])) {
				 echo "<p>You are log in</p>";
			}
			else {
				echo "<p>You are log out</p>";
			}
		?>
	</main>

<?php 
	require "footer.php";
?>