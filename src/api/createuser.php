<?php
//データベースへ接続
include 'setting.php';

//渡ってきたセッションの値を変数に代入
$name = $_SESSION['join']['name'];
$department = $_SESSION['join']['department_id'];
$email = $_SESSION['join']['email'] . '@rvp.co.jp';
$password = $_SESSION['join']['password'];

// 登録処理
$stmt = $db->prepare('INSERT INTO users(name, department_id, email, password) VALUES (?, ?, ?, ?)');
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $department, PDO::PARAM_INT);
$stmt->bindValue(3, $email);
$stmt->bindValue(4, $password);
$stmt->execute();

unset($_SESSION['join']);
// 登録後ユーザー一覧ページにリダイレクト
header('Location: ../pages/html/admin/getUsers.php');
exit();

?>