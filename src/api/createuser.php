<?php

//データベースへ接続
include 'setting(pdo).php';


// //POSTのValidate。
// if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//     echo '入力された値が不正です。';
//     return false;
//   }

//   //パスワードの正規表現
//   if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//   } else {
//     echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
//     return false;
//   }

//   //登録処理
//   try {
//     $stmt = $pdo->prepare("insert into userDeta(email, password) value(?, ?)");
//     $stmt->execute([$email, $password]);
//     echo '登録完了';
//   } catch (\Exception $e) {
//     echo '登録済みのメールアドレスです。';
//   }
  
  /*
  //DB内のメールアドレスを取得
  $stmt = $pdo->prepare("select email from userDeta where email = ?");
  $stmt->execute([$email]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  //DB内のメールアドレスと重複していない場合、登録する。
  if (!isset($row['email'])) {
    $stmt = $pdo->prepare("insert into userDeta(email, password) value(?, ?)");
    $stmt->execute([$email, $password]);
    echo "登録完了";
  } else {
    echo '既に登録されたメールアドレスです。';
    return false;
  }
  */




?>