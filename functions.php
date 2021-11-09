<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "idet8127_ideasight", "Putrimalu29", "idet8127_registrasi");

//Query

function query($query) {
  global $conn;
    $result = mysqli_query($conn, $query);
}

function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $re_password = mysqli_real_escape_string($conn, $data["re_password"]);

    // cek apakah email sudah terdaftar atau belum di database
    $result = mysqli_query($conn, "SELECT email FROM register WHERE email = '$email'");
    if( mysqli_fetch_assoc($result)){
      echo "<script>
              alert('Email sudah terdaftar!')
            </script>";
      return false;
    }

    //cek re_password
    if($password !== $re_password) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert ke database
    mysqli_query($conn, "INSERT INTO daftar_user VALUES ('','$nama', '$email', '$password')");

    return mysqli_affected_rows($conn);

}

?>