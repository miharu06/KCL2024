<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Labo Quest</title>
        <meta name="description" content="研究室検索">
        <link rel="stylesheet" href="style.css">
        <a href="home.php">
            <img src="images/LQ.png" alt="Labo_Quest" width="181" height="33">
        </a>
        <?php
            session_start();
            //変更時変える
            $_SESSION['更新日'] = "2024/10/31";
        ?>
        
    </head>
    <body>
        <center>

            <h4 style="text-align: right">更新日：<?php echo $_SESSION['更新日']; ?><br></h4>
            <h1>研究室検索</h1>
            <a href="search.php"><h4>検索画面はコチラ▷</h4></a>
            <h2>更新履歴</h2>
            <h4>2024/??/??：九工大工学3類の研究室が検索可能</h4>
        </center>
    </body>
</html>
