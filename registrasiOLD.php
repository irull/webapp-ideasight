<?php
require 'functions.php';

if( isset($_POST["submit"])) {
  if (registrasi($_POST) > 0 ){
    echo "<script>
              alert('User baru berhasil ditambahkan');
          </script>";
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Register</title>
</head>
<body>


      <form action="" method="post"> 
        <div class="main">
            <p class="register" align="center">Register</p>
            <form class="form1">
            <input class="row" type="text" align="center" placeholder="Username" name="nama" id="nama">
            <input class="row" type="text" align="center" placeholder="Email" name="email" id="email">
            <input class="row" type="password" align="center" placeholder="Password" name="password" id="password">
            <input class="row" type="password" align="center" placeholder="Re-Password" name="re_password" id="re_password">
            <button class="submit" type="submit" align="center" name="submit">Register</button>
            <p class="create" align="center"><a href="login.php">Login?</p>
        </div>
      </form>
</body>
</html>