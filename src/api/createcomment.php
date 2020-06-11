<?php
session_start();
//データベースへ接続
include 'setting.php';

//パラメータがpost_idとなる
$post_id = $_GET['id'];

//ログイン中ユーザーのID
$user_id = $_SESSION['id'];

//入力されたコメント
$text = $_POST['comment'];

// //渡ってきたセッションの値を変数に代入
// $json = file_get_contents("php://input");
// $contents = json_decode($json, true);
// $post_id = $contents['post_id'];
// $user_id = $contents['user_id'];
// $text = $contents['text'];

// 登録処理
$stmt = $db->prepare('INSERT INTO comments(post_id, user_id, text, created_at) VALUES (?, ?, ?, ?)');
$stmt->bindValue(1, $post_id);
$stmt->bindValue(2, $user_id);
$stmt->bindValue(3, $text);
$stmt->bindValue(4, date("cZ"));
$res = $stmt->execute();

$commentId = $db->lastInsertId();
$stmt = $db->query("UPDATE comments SET created_at = created_at + interval '9 hour' WHERE id=$commentId");

if($res){
  header('Location: ../pages/html/post_detail.php?id=' . $post_id);
}else{
  var_dump($stmt->errorInfo());
  echo "コメントの投稿に失敗しました";
}
?>
