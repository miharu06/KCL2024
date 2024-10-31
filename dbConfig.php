<?php
    // データベース接続設定
    $dsn = 'mysql:host=localhost;dbname=kcl2024;charset=utf8';
    $user = 'root'; // ユーザー名

try {
    $pdo = new PDO($dsn, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'データベース接続失敗: ' . $e->getMessage();
    exit();
}
?>
