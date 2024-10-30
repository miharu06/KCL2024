<?php
    $sq1 = "SELECT * FROM `laboratory name`";
    $sth = $db -> prepare($sq1); //準備
    $sth -> execute();           //実行
    $data = $sth -> fetchAll();  //全部取り出す

    return $data;

?>
