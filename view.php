<?php
require_once('function.php');
require_once('dbconnect.php');

 //SQLを実行
 $stmt = $dbh->prepare('SELECT * FROM surveys');
 $stmt->execute();
 $results = $stmt->fetchAll();
 //var_dump($results);
//  <!-- foreach ($results as $result) {
//    var_dump($result['nickname']);
//    var_dump($result['email']);
// } -->
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>一覧</title>
</head>
<body>
  <?php foreach ($results as $result):?>
  <p><?php echo h($result['nickname']); ?></p>
  <p><?php echo h($result['email']); ?></p>
  <p><?php echo h($result['content']); ?></p>
  <?php endforeach; ?>
</body>
</html>