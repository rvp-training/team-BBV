<?php
session_start();

//データベースへ接続
include 'setting.php';

$userId = $_SESSION['id'];

//date_default_timezone_set('Asia/Tokyo');

//選択された画像の枚数を数える
$num = 0;
foreach($_FILES['image']['tmp_name'] as $image) {
  if($image !== ""){
    $num++;
  }
}

function flash($type, $message) {
  global $flash;
  $_SESSION['flash'][$type] = $message;
  $flash[$type] = $message;
}

// 0枚なら投稿作成ページにリダイレクト
if($num === 0){
  flash('error', '*画像は１枚以上選択してください');
  header("Location: ../pages/html/createPost.php");
}else{

  //postの登録処理
  $stmt = $db->prepare('INSERT INTO posts(user_id, workspace_id, title, text, created_at) VALUES (?, ?, ?, ?, ?)');
  $stmt->bindValue(1, $userId);
  $stmt->bindValue(2, $_POST['workspace']);
  $stmt->bindValue(3, $_POST['title']);
  $stmt->bindValue(4, $_POST['text']);
  $stmt->bindValue(5, date("cZ"));
  $stmt->execute();

  $postId = $db->lastInsertId();

  foreach($_FILES['image']['tmp_name'] as $i => $tmp_name) {
      //画像が１枚もなければループを抜ける
      if ($tmp_name === "") {
          continue;
      }

      move_uploaded_file($tmp_name, "../images/uploads/".$postId."-".$i.".jpg");

      // 画像登録
      $stmt = $db->prepare('INSERT INTO images(post_id, image) VALUES (?, ?)');
      $stmt->bindValue(1, $postId);
      $stmt->bindValue(2, $postId."-".$i.".jpg");
      $stmt->execute();
  }

  unset($_SESSION['error']);

  if($_POST['workspace'] === "1"){
      header("Location: ../pages/html/posts_system.php");
  }elseif($_POST['workspace'] === "2"){
      header("Location: ../pages/html/posts_private.php");
  }else{
      var_dump($stmt->errorInfo());
      echo "投稿に失敗しました";
  }
}
?>