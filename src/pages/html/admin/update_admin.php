<?php 
session_start();
include '../../../api/setting.php';


// ログインしている、かつ管理者であるかチェック
// 一般ユーザ用ログインページにリダイレクト
$sql =$db->prepare('SELECT * FROM users WHERE id=?');
$sql->execute(array($_SESSION['id']));
$result = $sql->fetch();
if (!isset($_SESSION['id']) || !$result['is_admin']) {
    header('Location: ../login.php');
}


// パラメータ受け取り
// 選択中userのid
// 隠しデータでupdate_admin.phpに送る
$id = $_GET['id'];
// if (!is_numeric($id) || $id <= 0) {
//   print('パラメータは1以上の数字で指定してください');
//   exit();
// }


include "../../../api/getuserinfo.php";
$user = new User();
$userinfo = $user->getUserInfo($id);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ユーザー編集</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="update_admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <form id="edit" action="../../../api/updateuser_admin.php" method="post">
            <h1>- ユーザーの編集・削除 -</h1>
            <ul id="edit-list">
                <li>
                    <p>ユーザー名  <span>(全角または半角2～20字)</span></p>
                    <input name="name" id="name" maxlength="20" minlength="2" value="<?php echo $userinfo['name']; ?>">
                </li>
                <li>
                    <p>所属部署</p>
                    <select id="select" name="department_id">
                        <option value="<?php echo $userinfo['department_id']; ?>" selected><?php echo $userinfo['department']; ?></option>
                        <option value="1">総務部</option>
                        <option value="2">経理部</option>
                        <option value="3">業務部</option>
                        <option value="4">情報システム部</option>
                        <option value="5">商品部</option>
                        <option value="6">営業部</option>
                        <option value="7">未配属</option>
                    </select>
                </li>
                <li>
                    <p>パスワード  <span>(半角英数字6字)</span></p>
                    <input name="password" id="pass" value="<?php echo $userinfo['password']; ?>" type="password" pattern="[0-9A-Za-z]{6}" maxlength="6">
                </li>
            </ul>
            <input type="hidden" name='id' value="<?php echo $id; ?>">
            <input id="button" disabled type="submit" value="変更を保存">
            <a href="deleteUser.php?id=<?php echo $id; ?>">このユーザーを削除しますか？</a>
        </form>
        <script src="update_admin.js"></script>
    </body>
</html>