<?php 
session_start();
include '../../../api/setting.php';

//emailの重複をチェック
if(!empty($_POST)){
    $check = $db->prepare('SELECT COUNT(*) AS cnt FROM users WHERE email=?');
    $email = $_POST['email'] . '@rvp.co.jp';
    $check->execute(array($email));
    $record = $check->fetch();
    if($record['cnt'] > 0){
        $error['email'] = 'duplicate';
    }
    if(empty($error)){
        // 重複がなければ入力内容をセッションに保存し、
        // api/createUserにリダイレクト
		$_SESSION['join'] = $_POST;
		header('Location: ../../../../api/createUser.php');
		exit();
	}
}
if($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])){
	$_POST = $_SESSION['join'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>新規ユーザー登録</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="createUser.css">
    </head>

    <body>

        <!--サイドバー-->
        <div id="sidebar">
            <div id="sidebar-title">管理者<span class="br">アカウント</span></div>
                <ul id="sidebar-body">
                    <li><button class="sidebutton" onclick="ここにURLいれる！！">ユーザー<span class="br">一覧</span></button></li>
                    <li><button class="sidebutton" onclick="ここにURLいれる！！">新規登録</button></li>
                    <li>
                        <button class="logout" type="submit" onclick="location.href='../../../api/logout(admin).php'">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </button>
                    </li>
                </ul>
        </div>

        <!--コンテンツ-->
        <form action="" id="create" method="post">
            <h1>- 新規ユーザー登録 -</h1>
            <ul id="create-list">
                <li>
                    <p>ユーザー名  <span>(全角または半角2～20字)</span></p>
                    <input type="text" name="name" maxlength="20" minlength="2">
                </li>
                <li>
                    <p>所属部署</p>
                    <select name="department_id">
                        <option value="1">総務部</option>
                        <option value="2">経理部</option>
                        <option value="3">業務部</option>
                        <option value="4">情報システム部</option>
                        <option value="5">商品部</option>
                        <option value="6">営業部</option>
                    </select>
                </li>
                <li>
                    <p>Email</p>
                    <input type="text" name="email" pattern="^[0-9A-Za-z]+$"> @rvp.co.jp
                    <!-- emailが重複していた場合のエラー文 -->
                    <?php if($error['email'] === 'duplicate'): ?>
						<p style="color: red;">*すでに登録されているメールアドレスです</p>
					<?php endif; ?>
                </li>
                <li>
                    <p>パスワード  <span>(半角英数字6字)</span></p>
                    <input type="password" name="password" pattern="[0-9A-Za-z]{6}" maxlength="6" >
                </li>
            </ul>
            <input id="button" type="submit" value="新規登録">
        </form>
    </body>
</html>