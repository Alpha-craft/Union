<?php
session_start();
if($_SESSION["masuk"] == false){header("location:../masuk.php");}

include "../database.php";

$pesan = "<br>";

if(isset($_POST["pos"])){
    $judul = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["judul"]));
    $isi = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["isi"]));
    $nama = $_SESSION["nama"];

    if(empty(trim($judul)) || empty(trim($isi))){
        $pesan = "Isi semua formulir!";
    }
    elseif(strlen($judul) >= 200){
        $pesan = "Judul terlalu panjang (maximal 200 karakter)";
    }
    else{
        mysqli_query($conn, "INSERT INTO postb(seri,author,judul,isi,last_updated_stamp,last_updated_text) 
                                VALUES(null,'$nama','$judul','$isi','$timeStamp','$timeText')");
        header("location:forum.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Buat Topik</title>
</head>
<body>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="poscreatBox">
        <form method="POST">
            <p class="poscreatLabel">Buat Topik</p>
            <p>--Judul--</p>
            <input type="text" name="judul" class="judulPoscreat">
            <p>--isi--</p>
            <textarea name="isi" class="isiPoscreat"></textarea>
            <p class="alert">
                <?=$pesan;?>
            </p>
            <button type="submit" name="pos" class="poscreatBtn">Posting</button>
        </form>
    </div>
</body>
</html>