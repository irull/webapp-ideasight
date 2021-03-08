<?php
session_start();
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'functions.php';


if( isset($_POST["login"])) {

    $email = $_POST["email"];
    $password =$_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM daftar_user WHERE email ='$email'");

    //cek email
    if( mysqli_num_rows($result) ===1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
          // set sesion
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }

    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Sign in</title>
</head>
<body>


<?php if( isset($error)) :?>
    <p style="color: red; font-style: italic;">Email / Password Salah</p>
<?php endif;?>


<!-- <div id="particles-js"></div> -->
    <form action="" method="post"> 
        <div class="main">
            <p class="sign" align="center">Sign in</p>
            <form class="form1">
            <input class="row" type="text" align="center" placeholder="Email" name="email" id="email">
            <input class="row" type="password" align="center" placeholder="Password" name="password" id="password">
            <button class="submit" type="submit" align="center" name="login">Login</button>
            <p class="create" align="center"><a href="registrasi.php">Create Account?
            </p>
        </div>
    </form>
<!-- <script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script> -->
</body>
</html>