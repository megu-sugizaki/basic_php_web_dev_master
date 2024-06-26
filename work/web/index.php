<?php 
$today = date('Y-m-d H:i:s l');
// javascriptで悪さされる
$name = "Alan <script>alert(1)</script>";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <!-- ENT_QUOTESは"""も変換してねという意味 -->
  <p>Hello, <?= htmlspecialcharacters($name, ENT_QUOTES, 'UTF-8'); ?>!</p>
  <p>Today: <?= $today; ?></p>
</body>
</html>