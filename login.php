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
                  <div class="col-md-5 mr-2 rounded"><h1>Login</h1>
                    <form name="formLogin" method="POST">
                      <div class="form-group form-signin">
                        <label for="emailLogin">Email address</label>
                        <input type="email" class="form-control" id="emaillogin" aria-describedby="emailHelp" placeholder="Enter email"
                      onkeyup="if(this.value.length >0){document.getElementById('btnLogin').disabled = false;} else {document.getElementById('btnLogin').disabled = true;}">
                      </div>
                      <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordlogin" placeholder="Password"
                        onkeyup="if(this.value.length >0){document.getElementById('btnLogin').disabled = false;} else {document.getElementById('btnLogin').disabled = true;}">
                      </div>
                      <button type="submit" class="btn but-login cbtn" id="btnLogin" >Login</button>
                    </form>
                  </div>
              </div>
        </div>
        <script>
          //console.log($_SESSION['user']);
        </script>
  </body>
</html>