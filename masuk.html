<?php
session_start();
include "database.php";
$pesan = "<br>";

if(!isset($_SESSION["PesanDaftar"])){$_SESSION["PesanDaftar"] = null;}

if(isset($_POST["daftar"])){
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["nama"]));
    $san = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["san"]));

    $checkNam = mysqli_query($conn, "SELECT * FROM usertb WHERE nama = '$nama'");
    $fetchUser = mysqli_fetch_assoc($checkNam);

    if(empty(trim($nama)) || empty(trim($san))){
        $pesan = "Isi semua formulir!";
    }
    elseif(mysqli_num_rows($checkNam) == 1){
        if(password_verify($san, $fetchUser["sandi"]) == 1)
            {header("location:index.php");$_SESSION["nama"] = $nama;$_SESSION["masuk"] = true;}
        elseif(password_verify($san, $fetchUser["sandi"]) == 0)
            {$pesan = "Sandi salah";}
    }
    else{
        $pesan = "Nama belum didaftarkan";
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
    <title>Masuk</title>
</head>
<body>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="logBox">
        <form method="POST">
            <p class="logLabel">Masuk</p>
            <p style="color: yellowgreen;"><?=$_SESSION["PesanDaftar"];?></p>
            <p>--Nama--</p>
            <input type="text" name="nama" class="logInp" placeholder="Masukan Username Anda">
            <p>--Sandi--</p>
            <input type="password" name="san" class="logInp" placeholder="Masukan Sandi Anda">
            <p class="alert">
                <?=$pesan;?>
            </p>
            <button type="submit" name="daftar" class="logBtn">Masuk</button>
            <br>
            <span>Belum punya akun? <a href="daftar.php" style="color: cyan;">Daftar!</a></span>
        </form>
    </div>
</body>
</html>