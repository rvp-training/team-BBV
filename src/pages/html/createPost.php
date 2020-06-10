<?php 
session_start();

//フラッシュをクリアする処理
$flash = isset($_SESSION['flash']) ? $_SESSION['flash'] : array();
unset($_SESSION['flash']);

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
                <?php print('../../images/users/' . $user['image']); ?>
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
        <form id="create" enctype="multipart/form-data" method="post" action="../../api/createPost.php">
            <input id="title" name="title" val="" maxlength="40" placeholder="タイトルを入力してください。(全角または半角40字以内)" required>
            <?php foreach(array('default', 'error', 'warning') as $key): ?>
                <?php if(strlen(@$flash[$key])): ?>
                    <div class="flash flash-<?php echo $key ?>">
                        <?php echo $flash[$key] ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <div id="images"><!--これが画像1~10枚たちのdiv-->
                <div class="img set-0">
                    <input type="file" name="image[]" class="postImg input-0" accept="image/*">
                    <div class="preview image-0"> 
                        <p><img class="img-0"></p>
                        <i class="far fa-window-close delete-0"></i>
                    </div>
                </div>

                <div class="img set-1">
                    <input type="file" name="image[]" class="postImg input-1" accept="image/*">
                    <div class="preview image-1"> 
                        <p><img class="img-1"></p>
                        <i class="far fa-window-close delete-1"></i>
                    </div>
                </div>

                <div class="img set-2">
                    <input type="file" name="image[]" class="postImg input-2" accept="image/*">
                    <div class="preview image-2"> 
                        <p><img class="img-2"></p>
                        <i class="far fa-window-close delete-2"></i>
                    </div>
                </div>

                <div class="img set-3">
                    <input type="file" name="image[]" class="postImg input-3" accept="image/*">
                    <div class="preview image-3"> 
                        <p><img class="img-3"></p>
                        <i class="far fa-window-close delete-3"></i>
                    </div>
                </div>

                <div class="img set-4">
                    <input type="file" name="image[]" class="postImg input-4" accept="image/*">
                    <div class="preview image-4"> 
                        <p><img class="img-4"></p>
                        <i class="far fa-window-close delete-4"></i>
                    </div>
                </div>

                <div class="img set-5">
                    <input type="file" name="image[]" class="postImg input-5" accept="image/*">
                    <div class="preview image-5"> 
                        <p><img class="img-5"></p>
                        <i class="far fa-window-close delete-5"></i>
                    </div>
                </div>

                <div class="img set-6">
                    <input type="file" name="image[]" class="postImg input-6" accept="image/*">
                    <div class="preview image-6"> 
                        <p><img class="img-6"></p>
                        <i class="far fa-window-close delete-6"></i>
                    </div>
                </div>

                <div class="img set-7">
                    <input type="file" name="image[]" class="postImg input-7" accept="image/*">
                    <div class="preview image-7"> 
                        <p><img class="img-7"></p>
                        <i class="far fa-window-close delete-7"></i>
                    </div>
                </div>

                <div class="img set-8">
                    <input type="file" name="image[]" class="postImg input-8" accept="image/*">
                    <div class="preview image-8"> 
                        <p><img class="img-8"></p>
                        <i class="far fa-window-close delete-8"></i>
                    </div>
                </div>

                <div class="img set-9">
                    <input type="file" name="image[]" class="postImg input-9" accept="image/*">
                    <div class="preview image-9"> 
                        <p><img class="img-9"></p>
                        <i class="far fa-window-close delete-9"></i>
                    </div>
                </div>





            </div>
            



            <div id="workspace-radio">
                <p>投稿先ワークスペースを選択してください・・・　</p>
                <input id="item-2" class="radio-inline__input" type="radio" name="workspace" value="1" required/>
                <label class="radio-inline__label" for="item-2">
                    システム関連
                </label>
                <input id="item-3" class="radio-inline__input" type="radio" name="workspace" value="2"/>
                <label class="radio-inline__label" for="item-3">
                    日常
                </label>
            </div>

            <div id="comment">
                <li><textarea name="text" placeholder="テキストを入力してください。(全角または半角4,000字以内)" maxlength="4000"></textarea></li>
                <li><button id="send" type="submit">
                    <i class="fas fa-share fa-3x"></i></button>
                </li>
            </div>


        </form>

        

        <script src="createPost.js"></script>
    </body>
</html>