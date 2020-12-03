<?php
session_start();
if($_SESSION["masuk"] == false){header("location:../masuk.php");}
include "../database.php";

if(isset($_POST["keluar"])){
    session_unset();
    session_destroy();
    header("refresh:0.1");
}

$pesan = "<br>";
$nama = $_SESSION["nama"];
$seri = $_GET["seri"];

$selectPos = mysqli_query($conn, "SELECT * FROM postb WHERE seri = '$seri'");
$selectKomen = mysqli_query($conn, "SELECT * FROM komentb WHERE seri_pos = '$seri'");

$fetchPos = mysqli_fetch_assoc($selectPos);

if(isset($_POST["komenBtn"])){
    $komen = $_POST["komen"];
    if(empty(trim($_POST["komen"]))){
        $pesan = "Masukan komentar!";
    }
    else{
        mysqli_query($conn, "INSERT INTO komentb(dari_user,seri_pos,komen,pada) 
                        VALUES('$nama','$seri','$komen','$timeText')");
        header("refresh:0.1");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Union-Pos</title>
</head>
<body>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="label">
        <span class="rightLabelSpan">
            <form style="float: right;" method="POST">
                <button name="keluar" type="submit" class="outBtn">Keluar</button>
            </form>
            <a href="../akun.php" class="akunBtn">Akun</a>
        </span>
        <span class="symbol">&#9876</span>
        <span class="labelTitle">Union</span>
    </div>
    <div class="posBox">
        <p class="posTitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$fetchPos["judul"];?></p>
            <span class="posBy">By: <?=$fetchPos["author"];?></span>
            <span class="posOn">Last updated: <?=$fetchPos["last_updated_text"];?></span>
                <p class="posIsi"><?=nl2br($fetchPos["isi"]);?></p>
            <span class="posSeri">#<?=$fetchPos["seri"];?></span>
        <div>
            <?php while($fetchKomen = mysqli_fetch_assoc($selectKomen)):?>
            <div class="commentBox">
                <span class="commentNam"><?=$fetchKomen["dari_user"];?></span>
                <span class="commentOn">On: <?=$fetchKomen["pada"];?></span>
                <span class="commentIsi"><?=nl2br($fetchKomen["komen"]);?></span>
            </div>
            <?php endwhile;?>
            <div class="commentBoxInp">
            <form method="POST">
                <button class="commentBtn" type="submit" name="komenBtn">Comment</button>
                <span class="alert"><?=$pesan?></span>
                <textarea name="komen" class="commentInp"></textarea>
            </form>
        </div>
        </div>
    </div>
    <div class="botLabel">
        <a href="../forum/poscreat.php" class="botBtn">Posting</a>
        <a href="../about.html" class="botBtn">About</a>
        <a href="../index.php" class="botBtn">Home</a>
    </div>
</body>
</html>