
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

    $content2 = $_POST['content2'];

    $age = $_POST['age'];

    if($nickname==''){
        $nickname_result='氏名が入力されていません。';
    }else{
        $nickname_result='氏名:' . $nickname;
    }

    if($age==''){
        $age_result='年齢が入力されていません。';
    }else{
        $age_result='年齢' . $age;
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

    if($content2==''){
        $content2_result='お問い合わせ内容が入力されていません。';
    }else{
        $content2_result='お問い合わせ内容:' . $content2;
    }

    require_once('function.php');
    ?>
    <!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body class="size2">
    <h1>入力内容確認</h1>
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($age_result); ?></p>
    <?php if(isset($_POST['sex'])) {
        $sex = $_POST['sex'];
        echo '性別：' . $sex . '<br>';
    } else {
        echo '性別が選択されていません。<br>';
    } ?>
    <p><?php echo h($email_result); ?></p>
    <?php if(isset($_POST['teacher'])) {
        $teacher = $_POST['teacher'];
        echo '講師：' . $teacher . '<br>';
    } else {
        echo '講師が選択されていません。<br>';
    } ?><br>
    <?php if(isset($_POST['cs'])) {
        $cs = $_POST['cs'];
        echo '満足度：' . $cs . '<br>';
    } else {
        echo '満足度が選択されていません。<br>';
    } ?>
    <p><?php echo h($content_result); ?></p>
    <p><?php echo h($content2_result); ?></p>
    <button type="button" onclick="history.back()">戻る</button>
    <form method="post" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname;?>">
    <input type="hidden" name="age" value="<?php echo $age;?>">
    <input type="hidden" name="sex" value="<?php echo $sex;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="teacher" value="<?php echo $teacher;?>">
    <input type="hidden" name="cs" value="<?php echo $cs;?>">
    <input type="hidden" name="content" value="<?php echo $content;?>">
    <input type="hidden" name="content2" value="<?php echo $content2;?>">
        <button type="submit">OK</button>
</form>
</body>
</html>