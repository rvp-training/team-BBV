<?php
session_start();
//データベースへ接続
include 'setting.php';

//パラメータがpost_idとなる
$post_id = $_GET['id'];

//ログイン中ユーザーのID
$user_id = $_SESSION['id'];

//渡ってきたセッションの値を変数に代入
// $json = file_get_contents("../pages/html/post_detail.php");
// $contents = json_decode($json, true);
// $post_id = $contents['post_id'];
// $user_id = $contents['user_id'];

// 登録処理
$stmt = $db->prepare('INSERT INTO likes(post_id, user_id) VALUES (?, ?)');
$stmt->bindValue(1, $post_id);
$stmt->bindValue(2, $user_id);
$res = $stmt->execute();

if($res){
  header('Location: ../pages/html/post_detail.php?id=' . $post_id);
}else{
  var_dump($stmt->errorInfo());
  echo "いいねの追加に失敗しました";
}

?>
