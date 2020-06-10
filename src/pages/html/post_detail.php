<?php
session_start();
include '../../api/setting.php';

// ログインしていなければ一般ユーザー用ログインページにリダイレクト
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

// ログイン中ユーザの情報を変数に代入
include '../../api/getuserinfo.php';
$obj = new User();
$user = $obj->getUserInfo($_SESSION['id']);

// APIレスポンス：$post_detail
include '../../api/getpostdetail.php';

//likesテーブルへの検索
//一つの投稿に２回以上いいねできない仕様にする
$sql = $db->prepare('SELECT * FROM likes WHERE user_id=? AND post_id=?');
$sql->execute(array($_SESSION['id'], $post_detail['id']));
$record = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿詳細</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="post_detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <p><button class="side-botton"  style="<?php if($post_detail['workspace_id'] === 1) echo "background: #f9f1b5;"?>" onclick="location.href='/pages/html/posts_system.php'">システム<span class="br">関連</span></button></p>
            <p><input class="side-botton"  style="<?php if($post_detail['workspace_id'] === 2) echo "background: #f9f1b5;"?>" type="button" onclick="location.href='/pages/html/posts_private.php'" value="日常"></p>
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
     <div id="contents">
        <ul id="post-info">
            <li id="postuser"><?php echo $post_detail["name"];?></li>
            <div id="hover">
                <li>
                    <img id="postuser-icon" src="<?php echo '../../images/users/'.$post_detail['user_image_path'];?>">
                </li>
                <p class="fukidashi">所属部署：<?php echo $post_detail["department"];?><br><?php echo $post_detail["introduction"];?></p>
            </div>
            <li id="post-date"><?php echo $post_detail["created_at"];?></li>
        </ul>

        <div id="post">
            <p id="title"><?php echo $post_detail["title"];?></p>
                <div id="post-img">
                    <ul class="slides">
                        <?php foreach((array)$post_detail["image_path"] as $i => $path): ?>
                            <?php $active = $i === 0 ? " active" : NULL ?>
                            <li class="display<?php echo $active; ?>"><img src="<?php echo '../../images/uploads/' . $path; ?>"></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="index-btn-wrapper">
                        <input class="move-back" type="submit" name="botton" value="◀">
                        <?php foreach((array)$post_detail["image_path"] as $i2 => $path2): ?>
                            <?php $move = $i2 < 5 ? "move1" : "move2" ?>
                            <img class="index-btn <?php echo $move; ?>" src="<?php echo '../../images/uploads/' .  $path2; ?>">
                        <?php endforeach; ?>
                        <input class="move-go" type="submit" name="botton" value="▶">
                    </div>
                </div>
                <?php if ($post_detail["workspace_id"] === 2):?>
                    <div id="nice">
                        <?php if(!$record): ?>
                            <button type="submit" onclick="disabled = true; location.href='../../api/createlike.php?id=<?php echo $post_detail['id']; ?>'">
                                <i class="far fa-thumbs-up fa-3x"></i>
                            </button>
                        <?php endif; ?>
                        <p><?php echo $post_detail["like_count"];?>件いいねされました！</p>
                    </div>
                <?php endif; ?>
            <p id="post-text"><?php echo $post_detail["text"];?></p>
            <div id="display_comments">
                <?php foreach((array)$post_detail["comments"] as $i => $comment): ?>
                    <div class="comment_wrapper">
                        <?php if($i !== 0): ?>
                            <hr class="comment_border" />
                        <?php endif; ?>
                        <div class="comment_info">
                            <span class="comment_user"><?php echo $comment["comment_user"] ?></span>
                            <span class="comment_created_at"><?php echo $comment["comment_created_at"] ?></span>
                        </div>
                        <p class="comment_text"><?php echo $comment["comment_text"] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <form id="comment" action="../../api/createcomment.php?id=<?php echo $post_detail['id']; ?>" method="post">
        <li><textarea name="comment" placeholder="コメントを入力してください。(全角または半角4,000字以内)" maxlength="4000"></textarea></li>
        <li><button id="send" disabled type="submit">
            <i class="fas fa-share fa-3x"></i></button>
        </li>
    </form>
    <script src="post_detail.js"></script>
</body>
</html>
