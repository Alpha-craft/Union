<?php
session_start();
include "database.php";
$pesan = "<br>";

if(isset($_POST["daftar"])){
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama"]));
    $san0 = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["san0"]));
    $san1 = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["san1"]));

    $checkNam = mysqli_query($conn, "SELECT nama FROM usertb WHERE nama = '$nama'");

    if(empty(trim($nama)) || empty(trim($san0))){
        $pesan = "Isi semua formulir!";
    }
    elseif($san0 != $san1){
        $pesan = "Kedua sandi tidak sama";
    }
    elseif(mysqli_num_rows($checkNam) != 0){
        $pesan = "Nama telah digunakan";
    }
    elseif($san0 == $san1){
        $sandi = password_hash($san0, PASSWORD_BCRYPT);
        $_SESSION["PesanDaftar"] = "Akun Berhasil didaftarkan";
        mysqli_query($conn, "INSERT INTO usertb(id,nama,sandi) VALUES(null,'$nama','$sandi')");
        header("location:masuk.php");
    }
}

if(!isset($_SESSION["masuk"])) {$_SESSION["masuk"] = false;}
elseif($_SESSION["masuk"] == true) {header("location:index.php");}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Daftar</title>
</head>
<body>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="logBox">
        <form method="POST">
            <p class="logLabel">Buat akun</p>
            <p>--Nickname--</p>
            <input type="text" name="nama" class="logInp" placeholder="Masukan Nickname Anda">
            <p>--Sandi--</p>
            <input type="password" name="san0" class="logInp" placeholder="Sandi akun">
            <p>--Konfirmasi Sandi--</p>
            <input type="password" name="san1" class="logInp" placeholder="Konfirmasi Sandi">
            <p class="alert">
                <?=$pesan;?>
            </p>
            <button type="submit" name="daftar" class="logBtn">Daftarkan</button>
            <br>
            <span>Sudah mendaftar? <a href="masuk.php" style="color: cyan;">Masuk!</a></span>
        </form>
    </div>
</body>
</html>