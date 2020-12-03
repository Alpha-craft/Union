<?php
session_start();
if($_SESSION["masuk"] == false){header("location:masuk.php");}

if(isset($_POST["keluar"])){
    session_unset();
    session_destroy();
    header("refresh:0.1");
}

include "./database.php";
$nama = $_SESSION["nama"];

$selectUserPos = mysqli_query($conn, "SELECT * FROM postb WHERE author = '$nama'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My Account</title>
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
        <span class="akLabel">Ganti Sandi</span>
    <form class="akBox">
        <span>--Sandi saat ini--</span>
        <input type="password" class="akInp">
        <span>--Sandi Baru--</span>
        <input type="password" class="akInp">
        <span>--Konfirmasi sandi baru--</span>
        <input type="password" class="akInp">
    </form>
    <span class="akLabel">My Post</span>
    <div class="akBox">
        <?php while($fetch = mysqli_fetch_assoc($selectUserPos)):?>
        <div class="forumBox">
            <a href="forum/pos.php?seri=<?=$fetch['seri'];?>" class="forumLink">
                <p>
                    <span class="forumSeri">#<?=$fetch["seri"];?></span>
                    <span class="forumTitle">&nbsp;&nbsp;&nbsp;<?=$fetch["judul"];?></span>
                    <span class="forumBy">By: <?=$fetch["author"];?></span>
                    <span class="forumOn">Last Updated: <?=$fetch["last_updated_text"];?></span>
                </p>
            </a>
        </div>
    <?php endwhile;?>
            <br><br>
            <span style="color: gray;">Anda tidak memiliki postingan lagi...</span>
    </div>
    <div class="botLabel">
        <a href="index.php" class="botBtn">Home</a>
        <a href="about.html" class="botBtn">About</a>
        <a href="forum/poscreat.php" class="botBtn">Posting</a>
    </div>
</body>
</html>