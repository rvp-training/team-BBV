<?php  
include '../../../api/setting(pdo).php';

// $user = $db->prepare('SELECT COUNT(*) AS cnt FROM users WHERE email=?');
// $user->execute(array($_POST['email'] . 'rvp.co.jp'));
// $record = $user->fetch();
// if($record['cnt'] > 0){
//       $error['email'] = 'duplicate';
// }
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
                        <button class="logout" type="submit" onclick="location.href=ここにURLいれる">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </button>
                    </li>
                </ul>
        </div>

        <!--コンテンツ-->
        <form action="../../../../api/createUser.php" id="create" method="post">
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
                    <?php if($error['email'] === 'duplicate'): ?>
						<p class="error">*すでに登録されているメールアドレスです</p>
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