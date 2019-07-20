<?php
	session_start();
	$validName = "";
	$validPass = "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Simple login system" content="we are trying to build a simple login system using php + mySQLi">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Beta
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
		        <a class="nav-link" href="#">Portfolio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
		      </li>
    </ul>
    <?php
    if (isset($_SESSION["userId"])) {
    	echo '<form class="form-inline my-4 my-lg-0" action="includes/logout.inc.php" method="post">
	    		<button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" name="logout-submit">Logout</button>
	    	</form>';
    }
    else {

	    echo '<form class="form-inline my-4 my-lg-0" action="includes/login.inc.php" method="post">
	      <input class="form-control mr-sm-2" type="text" placeholder="@Username" name="mailuid">
	      <input class="form-control mr-sm-2" type="Password" placeholder="Password" name="pwd">
	      <a href="signup.php">Sign In </a>
	      <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" name="login-submit">Login</button>
	    </form>';
	}
	   ?>
  </div>
</nav>
