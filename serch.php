<?php
$_GET['nickname'];
require_once('function.php');
require_once('dbconnect.php');
$nickname='';
if(isset($_GET['nickname'])){
  $nickname=$_GET['nickname'];
}

$stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname like ?');
    $stmt->execute(["%$nickname%"]);
    $results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="GET">
  <input type="text" name="nickname">
  <input type="submit" value="検索">
  <!-- <button type="submit">検索</button> -->
  </form>
  <!-- <a href="http://localhost/php_contact_form/serch.php?test=aaaaa"></a> -->
</body>
</html>