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

    $content2 = $_POST['content2'];
    
    $age = $_POST['age'];
    
    $teacher = $_POST['teacher'];

    $sex = $_POST['sex'];

    $cs = $_POST['cs'];


require_once('function.php');
require_once('dbconnect.php');

 $stmt = $dbh->prepare('INSERT INTO surveys(nickname,age,sex,email,teacher,cs,content,content2)VALUES(?,?,?,?,?,?,?,?)');
 $stmt->execute([$nickname,$age,$sex,$email,$teacher,$cs,$content,$content2]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>送信完了</title>
</head>
<body class="size3">
  <h1>お問い合わせありがとうございました！</h1>
  <p><?php echo h('氏名:' . $nickname); ?></p>
  <p><?php echo h('年齢:' . $age); ?></p>
  <p><?php echo h('メールアドレス:' . $email); ?></p>
  <p><?php echo h('性別:' . $sex); ?></p>
  <p><?php echo h('講師:' . $teacher); ?></p>
  <p><?php echo h('満足度:' . $cs); ?></p>
  <p><?php echo h('内容1:' . $content); ?></p>
  <p><?php echo h('内容2:' . $content2); ?></p>
</body>
</html>