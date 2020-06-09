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

include '../../api/setting.php';

$posts = array();

$sql = '
SELECT
    p.id,
    p.title,
    p.created_at,
    u.name AS username,
    u.introduction,
    u.image AS user_image_path,
    d.name AS department,
    i.image AS image_path
FROM posts p
INNER JOIN users u ON p.user_id = u.id
INNER JOIN departments d ON u.department_id = d.id
INNER JOIN images i ON p.id = i.post_id
WHERE p.workspace_id = 1
ORDER BY p.id DESC
';

foreach ($db->query($sql) as $row) {
    if (!array_key_exists($row['id'], $posts)) {
        $posts[$row['id']] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'created_at' => $row['created_at'],
            'username' => $row['username'],
            'introduction' => $row['introduction'],
            'user_image_path' => $row['user_image_path'],
            'department' => $row['department'],
            'image_path' => array()
        );
    }
    $posts[$row['id']]['image_path'][] = $row['image_path'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>システム関連投稿一覧</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="posts_system.css">
</head>
<body>
    
    <!--一般ユーザーサイドバー-->
    <div id="sidebar">
        <div id="sidebar-title">
            <a href="myposts.php?id=<?php print($_SESSION['id']) ?>"><img src="<?php if($user['image']): ?>
                <?php print('../../images/users/' . $user['image']); ?>
            <?php else: ?>
                <?php print('/images/user_default.jpeg'); ?>
            <?php endif; ?>" width="70" height="70"></a>
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

    <h1>-システム関連投稿-</h1>
    <div id="pictures">
        <?php foreach($posts as $post): ?>
        <div class="poster-pic">
            <div class="post-head">
                <div id="hover">
                    <img class="img" src= "<?php if ($post['user_image_path']): ?>
                        <?php print('../../images/users/' . $post['user_image_path']); ?>
                    <?php else: ?>
                        <?php print('../../images/user_default.jpeg'); ?>
                    <?php endif; ?>" loading="lazy">
                    <p class="fukidashi"><?php echo $post['department']; ?>：<br><?php echo $post['introduction']; ?></p>
                </div> 
                <div class="poster">
                    <p class="poster1"><?php echo $post['username']; ?></p>
                    <p class="poster2"><?php echo $post['title']; ?></p>
                </div>
                <?php if(count($post['image_path'])>1):?>
                <i class="far fa-clone fa-3x"></i>
                <?php endif; ?>
            </div>
            <div class="top-position">
                <a href="post_detail.php?id=<?php print $post['id']; ?>">
                    <img class="top" src=<?php echo '/images/uploads/'.$post['image_path'][0]; ?> loading="lazy">
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>