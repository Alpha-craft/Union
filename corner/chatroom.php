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
$selectChat = mysqli_query($conn, "SELECT * FROM cornertb ORDER BY id DESC");

if(isset($_POST["chatBtn"])){
    $teks = htmlspecialchars(mysqli_real_escape_string($conn ,$_POST["teks"]));
    $nama = $_SESSION["nama"];

    if(empty(trim($teks))){header("refresh:0.1");}

    else{mysqli_query($conn, "INSERT INTO cornertb(id,dari_user,teks,time_teks) 
                        VALUES(null,'$nama','$teks','$timeText')");
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
    <title>The Corner</title>
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
    <div>
        <span class="corLabel">The Corner</span>
    <span class="chatBox">
        <?php while($fetchChat = mysqli_fetch_assoc($selectChat)):?>
            <?php
            if($fetchChat["dari_user"] == $_SESSION["nama"]){$chatClass = "myChat";}
            elseif($fetchChat["dari_user"] != $_SESSION["nama"]){$chatClass = "theirChat";}
            ?>
        
            <span class="<?=$chatClass;?>">
                <a class="chatNama"><?=$fetchChat["dari_user"];?></a>
                <a class="chatTeks"><?=$fetchChat["teks"];?></a>
                <a class="chatOn"><?=$fetchChat["time_teks"];?></a>
            </span>
        <?php endwhile;?>
    </span>
    <form method="POST" class="chatForm">
        <input type="text" name="teks" class="chatText">
        <button type="submit" name="chatBtn" class="chatBtn">>></button>
    </form>
    </div>
    <div class="botLabel">
        <a href="../forum/poscreat.php" class="botBtn">Posting</a>
        <a href="../about.html" class="botBtn">About</a>
        <a href="../index.php" class="botBtn">Home</a>
    </div>
</body>
</html>