<?php
//データベースへ接続
include 'setting(pdo).php';

//メールアドレスの重複をチェック
$user = $db->prepare('SELECT COUNT(*) AS cnt FROM users WHERE email=?');
$user->execute(array($_POST['email'] . 'rvp.co.jp'));
$record = $user->fetch();
if($record['cnt'] > 0){
  $error['email'] = 'duplicate';
  return false;
}else{
  // 重複がなければ登録する
  $statement = $db->prepare('INSERT INTO users SET name=?, department_id=?, email=?, password=?');
  $statement->execute(array(
    $_POST['name'],
    $_POST['department_id'],
    $_POST['email'] . 'rvp.co.jp',
    sha1($_POST['password'])
  ));
  // header('Location: ユーザー一覧画面');
  exit();
}

?>