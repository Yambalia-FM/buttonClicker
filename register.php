<?php
	session_start();
	require("functions.php");
  if(isset($_SESSION['user'])){
		header("Location: index.php");
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['user']);
	}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/clickme.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script src="js/login.js"></script>
    </head>
    <body>
        <?php
          include 'navbar.php';
        ?>

              <div class="container">
                <div class="row">
                  <div class="col-md-5 mr-2 rounded"><h1>Register</h1>
                    <form name="formLogin" method="POST">
                      <div class="form-group form-signin col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your First Name" required>
                      </div>
                      <div class="form-group form-signin col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your Last Name" required>
                      </div>
                      <div class="form-group form-signin col-md-6">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" placeholder="Type in your desired Username" required> 
                      </div>
                      <div class="form-group form-signin col-md-6">
                        <label for="lname">Contact</label>
                        <input type="text" class="form-control" id="contact" placeholder="Type in your Number">
                      </div>
                      <div class="form-group form-signin">
                        <label for="emailLogin">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="passwordLogin">Confirm Password</label>
                        <input type="password" class="form-control" id="passwordConfirm" placeholder="Password">
                      </div>
                      <button type="submit" class="btn but-login cbtn" id="register" >Sign Up</button>
                    </form>
                  </div>
              </div>
        </div>
        <script src="js/register1.js"></script>
  </body>
</html>