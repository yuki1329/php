<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Location: index.html');
}
require_once('function.php');
$nickname = $_POST['nickname'];
// echo $nickname;

$email = $_POST['email'];
// echo $email;

$content = $_POST['content'];
// echo $content;
require_once('function.php');
require_once('dbconnect.php');

$stmt = $dbh->prepare('INSERT INTO surveys (nickname,email,content)VALUES(?,?,?)');
$stmt->execute([$nickname,$email,$content]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>送信完了</title>
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <p><?php echo h($nickname); ?></p>
  <p><?php echo h($email); ?></p>
  <p><?php echo h($content); ?></p>
</body>
</html>