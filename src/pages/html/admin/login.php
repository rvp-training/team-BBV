<?php
session_start();
include '../../../api/setting.php';

// formが送信されたとき
if(!empty($_POST)){
    if($_POST['email'] !== '' && $_POST['password'] !== ''){
        //入力されたemailとpaswordに一致する管理者ユーザを検索
        $login = $db->prepare('SELECT * FROM users WHERE email=? AND password=? AND is_deleted=false AND is_admin=true');
        $login->execute(array(
        $_POST['email'],
        $_POST['password']
        ));
        //該当するレコードがあれば$userに代入
        $user = $login->fetch();
        //セッションにuser_idを保存
        if($user){
            $_SESSION['id'] = $user['id'];
            //ユーザー一覧ページへリダイレクト
            header('Location: getUsers.php');
            exit();
        }else{
            $error['login'] = 'failed';
        }
    }
    
}

// ログイン中ユーザの情報を変数に代入
include '../../../api/getuserinfo.php';
$obj = new User();
$currentUser = $obj->getUserInfo($_SESSION['id']);
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
    <?php if (isset($_SESSION['id'])): ?>
        <?php echo $currentUser['name'] . " さんでログイン中です。ログアウト処理してください。" ?><a href="../posts_system.php" style="color: white">システム関連投稿一覧ページへ</a>
    <?php endif; ?>
    <form action="" method="post">
        <!-- ログイン失敗時のエラー文 -->
        <?php if($error['login'] === 'failed'): ?>
            <p class="form-error">Emailアドレス、パスワードを確認してください。</p>
        <?php endif; ?>
        <p>管理者Email</p>    
        <p class="mail"><input type="email" name="email"></p>
        <p>管理者パスワード</p>
        <p class="pass"><input type="password" name="password"></p>
        <p class="submit"><input type="submit" name="botton" value="ログイン"></p>
    </form>
    </div>
    <p class="admin"><a href="../login.php">一般ユーザーの方はこちら</a></p>
</body>
</html>