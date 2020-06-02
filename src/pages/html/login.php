<?php
session_start();
include '../../api/setting.php';

// デバッグ用記述
if (isset($_SESSION['id'])) {
    var_dump($_SESSION['id']);
} 

// formが送信されたとき
if(!empty($_POST)){
    if($_POST['email'] !== '' && $_POST['password'] !== ''){
        //入力されたemailとpaswordに一致する一般ユーザを検索
        $login = $db->prepare('SELECT * FROM users WHERE email=? AND password=? AND is_deleted=false AND is_admin=false');
        $login->execute(array(
        $_POST['email'],
        sha1($_POST['password'])
        ));
        //該当するレコードがあれば$userに代入
        $user = $login->fetch();
        //セッションにuser_idを保存
        if($user){
            $_SESSION['id'] = $user['id'];
            //システム関連投稿一覧へリダイレクト
            header('Location: posts_system.php');
            exit();
        }else{
            $error['login'] = 'failed';
        }
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <h1 class="form-title">RVP画像共有チャット</h1>
    <div id="from">
    <form action="" method="post">
        <!-- ログイン失敗時のエラー文 -->
        <?php if($error['login'] === 'failed'): ?>
            <p class="form-error">Emailアドレス、パスワードを確認してください。それでもログインできない場合、システム管理者にお問い合わせください。</p>
        <?php endif; ?>
        <p>Email</p>
        <p class="mail"><input type="email" name="email"></p>
        <p>パスワード</p>
        <p class="pass"><input type="password" name="password"></p>
        <p class="submit"><input type="submit" name="botton" value="ログイン"></p>
    </form>
    </div>
    <p class="admin"><a href="admin/login.php">管理者の方はこちら</a></p>
</body>
</html>