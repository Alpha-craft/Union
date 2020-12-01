<?php
session_start();
if($_SESSION["masuk"] == false){header("location:../masuk.php");}

include "../database.php";

if(isset($_POST["keluar"])){
    session_unset();
    session_destroy();
    header("refresh:0.1");
}

$selectPosTb = mysqli_query($conn, "SELECT * FROM postb ORDER BY last_updated_stamp DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Forum</title>
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
    <?php while($fetch = mysqli_fetch_assoc($selectPosTb)):?>
    <div class="forumBox">
        <a href="pos.php?seri=<?=$fetch['seri'];?>" class="forumLink">
            <p>
                <span class="forumSeri">#<?=$fetch["seri"];?></span>
                <span class="forumTitle">&nbsp;&nbsp;&nbsp;<?=$fetch["judul"];?></span>
                <span class="forumBy">By: <?=$fetch["author"];?></span>
                <span class="forumOn">Last Updated: <?=$fetch["last_updated_text"];?></span>
            </p>
        </a>
    </div>
    <?php endwhile;?>
    <div class="botLabel">
        <a href="../forum/poscreat.php" class="botBtn">Posting</a>
        <a href="../about.html" class="botBtn">About</a>
        <a href="../index.php" class="botBtn">Home</a>
    </div>
</body>
</html>