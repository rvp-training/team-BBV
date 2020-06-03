<?php
session_start();

// パラメータで送られてきたidを取得して変数に代入
$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0) {
  print('パラメータは1以上の数字で指定してください');
  exit();
}

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
    <title>マイページ</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="myposts.css">
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

    <h1 id="pagename">-マイページ-</h1>
    <h3 id="pagename-2">投稿履歴</h3>
    <p class="edit">
    <button type="submit" onclick="lication.href=ここにURL">
        <i class="fas fa-cog fa-3x"></i>
    </button>
    </p>
    <div id="pictures">
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"></a></p></div>
        </div>
        <div class="poster-pic">
            <div class="post-head">
                 <div class="poster">
                    <p class="poster2">投稿タイトル</p>
                 </div>
                 <i class="far fa-clone fa-3x"></i>
            </div>
            <div class="top-position"><a href="遷移先の画面のURL"><img class="top" src="https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg" loading="lazy"></a></p></div>
        </div>
    
    
 </div>
</body>
</html>