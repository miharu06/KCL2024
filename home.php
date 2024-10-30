<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Labo Quest</title>
        <meta name="description" content="研究室検索">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("dbConfig.php") ?>
        <?php //include("getDatas.php") ?>
        <img src="images/LQ.png" alt="Labo_Quest" width="181" height="33">
        <center>
        <?php
            session_start();
            //変更時変える
            $_SESSION['更新日'] = "2024/10/30";
        ?>

            <h4 style="text-align: right">更新日：<?php echo $_SESSION['更新日']; ?><br></h4>
            <h1>研究室検索</h1>
            <!--検索窓-->
            <form action="search.php" method="get">
                <input type="search" name="search" placeholder="キーワードで検索">
                <input type="image" src="images/q.png" width="20" height="20" alt="検索" value="検索する">
            </form>
            <br>
            <h2>更新履歴</h2>
            <h4>2024/??/??：九工大工学3類の研究室が検索可能</h4>
        </center>
    </body>
</html>
