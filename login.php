<?php
session_start();
if(isset($_SESSION["login"])){
    header("Location: home");
    exit;
}

require 'functions.php';


if( isset($_POST["login"])) {

    $email = $_POST["email"];
    $password =$_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM register WHERE email ='$email'");

    //cek email
    if( mysqli_num_rows($result) ===1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
          // set sesion
            $_SESSION["login"] = true;

            header("Location: home");
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/is.png" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">


</head>
<body>

<?php if( isset($error)) :?>
    <!-- <p style="color: red; font-style: italic;">Email / Password Salah</p> -->
            <script>
                alert('Password salah!!!');
            </script>
<?php endif;?>


    <div id="particles-js"></div>
        <form action="" method="post">
            <div class="loginBox">
                <img src="img/ideasightsmall.jpg" class="user">
                <h2>Login</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="email" placeholder="Enter Email" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="******" required>
                    <input type="submit" name="login" value="Sign In">
                    <a href="register">Create Account?</a>
                </form>
            </div>
        </form>
    
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>