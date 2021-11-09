<?php
require 'functions.php';

if( isset($_POST["submit"])) {
  if (registrasi($_POST) > 0 ){
    echo "<script>
              alert('User baru berhasil ditambahkan');
          </script>";
    header("Location: login");
  } else {
    echo mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/is.png" />
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div id="particles-js"> </div>
        <form action="" method="post">
            <div class="loginBox">
                <img src="img/ideasightsmall.jpg" class="user">
                <h2>Register</h2>
                <form>
                    <p>Username</p>
                    <input type="text" name="nama" placeholder="Username" required>
                    <p>Email</p>
                    <input type="text" name="email" placeholder="Enter Email" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="******" required>
                    <p>Re-Password</p>
                    <input type="password" name="re_password" placeholder="******" required>
                    <input type="submit" name="submit" value="Register">
                    <a href="login">Back To Login</a>
                </form>
            </div>
        </form>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>