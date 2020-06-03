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
        <title>新規投稿作成</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="createPost.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <scpipt type></scpipt>
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
        <h1>- 投稿を作成 -</h1>
        <form id="create" enctype="multipart/form-data" method="post">
            <input id="title" val="" maxlength="40" placeholder="タイトルを入力してください。(全角または半角40字以内)" required>
              
            <div id="images"><!--これが画像1~10枚たちのdiv-->

                <div class="img-delete"><!--これが1画像のdiv アップロードした写真の数追加されるように書きたい-->
                    <img class="image" src="data:image/jpeg;base64,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">
                    <div class="delete"> <!--jQueryで要素を消す-->
                        <i class="far fa-window-close fa-2x"></i>
                    </div>
                </div> 


            </div>
               
            <p id="file"><input type="file" name="userfile[]" accept="image/*" multiple></p>          

            <div id="workspace-radio">
                <p>投稿先ワークスペースを選択してください・・・　</p>
                <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2"/>
                <label class="radio-inline__label" for="item-2" required>
                    システム関連
                </label>
                <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3"/>
                <label class="radio-inline__label" for="item-3">
                    日常
                </label>
            </div>

            <div id="comment">
                <li><textarea name="comments" placeholder="テキストを入力してください。(全角または半角4,000字以内)" maxlength="4000"></textarea></li>
                <li><button id="send" type="submit" onclick="location.href=ここにURLいれる">
                    <i class="fas fa-share fa-3x"></i></button>
                </li>
            </div>


        </form>

        

        <script src="createPost.js"></script>
    </body>
</html>