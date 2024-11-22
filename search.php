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
        include("dbConfig.php");
        session_start();
    ?> 
    <h4 style="text-align: right">更新日：<?php echo $_SESSION['更新日']; ?><br></h4>
</head>
<body>
    <center><h1>検索画面</h1></center>
    <form method="GET" action="" style="text-align: center; margin-bottom: 20px;">
        <label for="keyword" class="a"><b>検索キーワード:</b></label>
        <input type="text" name="keyword" id="keyword" required>
        <button type="submit">検索</button>
    </form>

    <?php
    // 検索ワードの取得
    $searchKeyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
    ?>

    <center><h4>検索ワード:<?php echo $searchKeyword; ?></h4><center>
    <?php
    if (!empty($searchKeyword)) {
        // 検索処理
        try {
        // IDとURLを含むデータを検索
        $sql = "SELECT id, labo_name, labo_faculty, labo_content, labo_url 
                FROM labo 
                WHERE labo_name LIKE :searchKeyword 
                OR labo_faculty LIKE :searchKeyword 
                OR labo_content LIKE :searchKeyword";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':searchKeyword', '%' . $searchKeyword . '%', PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'エラー: ' . $e->getMessage();
    }

    // 検索結果の表示
    if (!empty($data)) {
        $data_number=0;
        echo "<center><h1>検索結果</h1></center>";
        echo "<table style='width: 80%; margin: auto; text-align: center; border: 2px solid #b1e8f7; border-collapse: collapse;'>";
        echo "<tr>
                <th style='border: 2px solid #b1e8f7;'>研究室名</th>
                <th style='border: 2px solid #b1e8f7;'>学部</th>
                <th style='border: 2px solid #b1e8f7;'>URL</th>
            </tr>";
        foreach($data as $labo) {
            $data_number+=1;
            echo "<tr>
                <td style='border: 2px solid #b1e8f7;'>" . htmlspecialchars($labo['labo_name'], ENT_QUOTES, 'UTF-8') . "</td>
                <td style='border: 2px solid #b1e8f7;'>" . htmlspecialchars($labo['labo_faculty'], ENT_QUOTES, 'UTF-8') . "</td>
                <td style='border: 2px solid #b1e8f7;'><a href='" . htmlspecialchars($labo['labo_url'], ENT_QUOTES, 'UTF-8') . "' target='_blank'>リンク</a></td>
              </tr>";

        }
        echo "<h2>$data_number 件ヒットしました</h2>";
        
        echo "</table>";
    } else {
    echo "<center><h2>該当する結果は見つかりませんでした。</h2></center>";
    }
    }
    ?>
</body>
</html>
