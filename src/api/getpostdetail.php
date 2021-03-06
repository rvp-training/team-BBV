<?php
session_start();


// // ログイン中ユーザの情報を変数に代入
include_once 'getuserinfo.php';
$obj = new User();
$user = $obj->getUserInfo($_SESSION['id']);


require(dirname(__FILE__) . '/setting.php');
$post_id = $_GET['id'];



if (!empty($post_id) && !is_numeric($post_id)) {
    echo "投稿ID取得に失敗しました\n";
    echo "post_id: {$post_id}";
    return NULL;
}

$stmt = $db->prepare('SELECT p.id,
  p.title,
  p.text,
  p.workspace_id,
  p.created_at,
  u.name,
  u.introduction,
  u.image as user_image_path,
  d.name as department,
  i.image as image_path,
  (
    SELECT count (l.id)
    FROM likes l
    where l.post_id = p.id
  ) as like_count
FROM posts p
  LEFT JOIN users u ON p.user_id = u.id
  LEFT JOIN departments d ON u.department_id = d.id
  LEFT JOIN images i ON p.id = i.post_id
WHERE p.id = :post_id;
');

$stmt->execute(array(":post_id" => $post_id));
// $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
$post_detail = array();

foreach ($stmt as $row) {
  if (empty($post_detail)) {
      $post_detail= array(
          'id' => $row['id'],
          'title' => $row['title'],
          'text' => $row['text'],
          'workspace_id' => $row['workspace_id'],
          'created_at' => $row['created_at'],
          'name' => $row['name'],
          'introduction' => $row['introduction'],
          'user_image_path' => $row['user_image_path'],
          'department' => $row['department'],
          'image_path' => array(),
          'like_count' => $row['like_count'],
          'comments' => array()
      );
  }
  array_push($post_detail['image_path'], $row['image_path']);
}

$stmt = $db->prepare("SELECT (
        SELECT name
        FROM users u
        where u.id = c.user_id
    ) as comment_user,
    c.text as comment_text,
    c.created_at as comment_created_at
    FROM comments c
    WHERE c.post_id = :post_id
    ORDER BY comment_created_at ASC
");
$stmt->execute(array(":post_id" => $post_id));
$comment_response = $stmt->fetchAll(PDO::FETCH_ASSOC);
$post_detail['comments'] = $comment_response;


?>
