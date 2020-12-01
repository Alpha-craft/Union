<?php
session_start();
if($_SESSION["masuk"] == false){header("location:masuk.php");}

if(isset($_POST["keluar"])){
    session_unset();
    session_destroy();
    header("refresh:0.1");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="label">
        <span class="rightLabelSpan">
            <form style="float: right;" method="POST">
                <button name="keluar" type="submit" class="outBtn">Keluar</button>
            </form>
            <a href="akun.php" class="akunBtn">Akun</a>
        </span>
        <span class="symbol">&#9876</span>
        <span class="labelTitle">Union</span>
    </div>
    <div>
        <div class="homeLabel">
            <a href="forum/forum.php" class="homeLink">
                <p>
                    <span class="homeTitle">Forum</span>
                    <span class="homeText">Diskusikan berbagai topik dengan pengguna lain</span>
                </p>
            </a>
        </div>
        <div class="homeLabel">
            <a href="corner/chatroom.php" class="homeLink">
                <p>
                    <span class="homeTitle">The Corner</span>
                    <span class="homeText">Mengobrol dengan pengguna lain disini</span>
                </p>
            </a>
        </div>
        <div class="homeLabel">
            <a href="" class="homeLink">
                <p>
                    <span class="homeTitle">&#9734;Review</span>
                    <span class="homeText">Tinggalkan saran atau laporkan bug untuk diperbaiki</span>
                </p>
            </a>
        </div>
    </div>
    <div class="botLabel">
        <a href="index.php" class="botBtn">Home</a>
        <a href="about.html" class="botBtn">About</a>
        <a href="forum/poscreat.php" class="botBtn">Posting</a>
    </div>
</body>
</html>