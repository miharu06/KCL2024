<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Labo Quest</title>
        <meta name="description" content="研究室検索">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <img src="images/LQ.png" alt="Labo_Quest" width="181" height="33">
        <center>
        <?php
            session_start();
        ?> 
            <h4 style="text-align: right">更新日：<?php echo $_SESSION['更新日']; ?><br></h4>
            <h1>検索結果</h1>
            
        </center>
    </body>
</html>
