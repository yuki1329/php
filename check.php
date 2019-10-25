
<!-- // $nickname = $_POST['nickname'];
// var_dump($nickname); -->


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.html');
}
    $nickname = $_POST['nickname'];
    // echo $nickname;
    
    $email = $_POST['email'];
    // echo $email;

    $content = $_POST['content'];
    // echo $content;

    if($nickname==''){
        $nickname_result='ニックネームが入力されていません。';
    }else{
        $nickname_result='ようこそ' . $nickname . '様';
    }

    if($email==''){
        $email_result='メールアドレスが入力されていません。';
    }else{
        $email_result='メールアドレス:' . $email;
    }

    if($content==''){
        $content_result='お問い合わせ内容が入力されていません。';
    }else{
        $content_result='お問い合わせ内容:' . $content;
    }

    require_once('function.php');
    ?>
    <!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($content_result); ?></p>
    <button type="button" onclick="history.back()">戻る</button>
    <form method="post" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="content" value="<?php echo $content;?>">
    <!-- フォーム送信用のボタンじゃない時はtype="button"にする -->
    <!-- フォーム送信用の時はtype="submit"にする -->
    <!-- コロン構文 -->
    <?php if ($nickname != '' && $email != '' && $content != ''):?>
        <button type="submit">OK</button>
<?php endif;?>
</form>
</body>
</html>