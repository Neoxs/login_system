<?php 
	require "header.php";
?>

	<main>
		
	    <form action="includes/signup.inc.php" method="post">
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Username</label>
		    <input type="text" class="form-control" name="uid" id="exampleInputPassword1"">
		   <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="text" class="form-control" name="mail">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1" >Re-enter Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat">
		  </div>
		  <button type="submit" class="btn btn-primary" name="signup-submit">Sign in</button>
		</form>
	</main>

<?php 
	require "footer.php";
?>