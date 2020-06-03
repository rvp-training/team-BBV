<?php
include '../../../api/getusers.php';
session_start();
include '../../../api/setting.php';

//ログインしている、かつ管理者であるかチェック
//一般ユーザ用ログインページにリダイレクト
$sql =$db->prepare('SELECT * FROM users WHERE id=?');
$sql->execute(array($_SESSION['id']));
$result = $sql->fetch();
if (!isset($_SESSION['id']) || !$result['is_admin']) {
    header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ユーザー一覧</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="getUsers.css">
    </head>

    <body>

        <!--サイドバー-->
        <div id="sidebar">
            <div id="sidebar-title">管理者<span class="br">アカウント</span></div>
                <ul id="sidebar-body">
                    <li><button class="sidebutton" onclick="location.href='getUsers.php'">ユーザー<span class="br">一覧</span></button></li>
                    <li><button class="sidebutton" onclick="location.href='createUser.php'">新規登録</button></li>
                    <li>
                        <button class="logout" type="submit" onclick="location.href='../../../api/logout(admin).php'">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </button>
                    </li>
                </ul>
        </div>

        <!--コンテンツ-->
        <div id="userTable">
            <h1>- ユーザー一覧 -</h1>
            <table border="1">
                <tr>
                    <th>ID</th><th>ユーザー名</th><th>所属部署</th><th>Email</th><th>パスワード</th> <th>編集・削除</th>
                </tr>

                <?php while($result = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                <td><?php print($result['user_id']); ?></td>
                <td><?php print($result['user_name']); ?></td>
                <td><?php print($result['department_name']); ?></td>
                <td><?php print($result['email']); ?></td>
                <td><?php print($result['password']); ?></td>
                <!-- 以下の遷移先をupdate_admin.phpのパラメータにuser_idを渡したものにする -->
                <td><a href="update_admin.php?id=<?php print($result['user_id'])?>">編集・削除</a></td>
                </tr>
                <?php endwhile; ?>

            </table>

