<?php
session_start();

// ログインしていなければ一般ユーザー用ログインページにリダイレクト
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

// ログイン中ユーザの情報を変数に代入
include '../../api/getuserinfo.php';
$obj = new User();
$user = $obj->getUserInfo($_SESSION['id']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ユーザー情報設定</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="update.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>

    <!--一般ユーザーサイドバー-->
    <div id="sidebar">
        <div id="sidebar-title">
            <a href="myposts.php?id=<?php print($_SESSION['id']) ?>"><img src="<?php if($user['image']): ?>
                <?php print($user['image']); ?>
            <?php else: ?>
                <?php print('/images/user_default.jpeg'); ?>
            <?php endif; ?>" width="50" height="50"></a>
            <p><?php print($user['name']); ?></p>
        </div>
        <div id="sidebar-body">
            <p class="workspace">ワークスペース</p>
            <p><button class="side-botton" style="background: #f9f1b5;" onclick="location.href='/pages/html/posts_system.php'">システム<span class="br">関連</span></button></p> 
            <p><input class="side-botton" type="button" onclick="location.href='/pages/html/posts_private.php'" value="日常"></p> 
            <p class="logout">
                <button type="submit" onclick="location.href='../../api/logout.php'">
                <i class="fas fa-sign-out-alt fa-2x"></i>
                </button>
            </p>
            <p class="createpost">
                <button type="submit" onclick="location.href='/pages/html/createPost.php'">
                    <i class="fas fa-camera fa-4x"></i>
                </button>
            </p>
        </div>
    </div>

        <!--コンテンツ-->
        <div id="update-left">
            <h1>- ユーザー情報設定 -</h1>
            <ul id="update-list">
                <li>
                    <p class="item">ユーザー名※</p>
                    <p class="get-item">”名前をGET”</p>
                </li>
                <li>
                    <p class="item">所属部署※</p>
                    <p class="get-item">”所属部署をGET”</p>
                </li>
                <li>
                    <p class="item">ひとこと自己紹介　<span>(全角または半角50字以内)</span></p>
                    <textarea id="hitokoto" value="" maxlength="50"></textarea>
                </li>
            </ul>
        </div>
        <div id="update-right">
            <p>プロフィール写真</p>
            <input type="file" id="myImage" accept="image/*">
            <p><img id="preview"></p>
        </div>
            <input id="button" type="submit" value="変更を保存" />
            <p id="message">※所属部署・氏名に変更が必要な方はシステム管理者までご連絡ください。</p>
            
            <script src="update.js"></script>
        </body>
</html>