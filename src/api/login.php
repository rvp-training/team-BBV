<?php


/*
if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}
*/


// //DB内でPOSTされたメールアドレスを検索
// try {
//     $pdo = include 'setting.php';
//     $stmt = $pdo->prepare('select * from userDeta where email = ?');
//     $stmt->execute([$_POST['email']]);
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//   } catch (\Exception $e) {
//     echo $e->getMessage() . PHP_EOL;
//   }

//   //emailがDB内に存在しているか確認
// if (!isset($row['email'])) {
//     echo 'メールアドレス又はパスワードが間違っています。';
//     return false;
//   }

//   //パスワード確認後sessionにメールアドレスを渡す
// if (password_verify($_POST['password'], $row['password'])) {
//     session_regenerate_id(true); //session_idを新しく生成し、置き換える
//     $_SESSION['EMAIL'] = $row['email'];
//     echo 'ログインしました';
//   } else {
//     echo 'メールアドレス又はパスワードが間違っています。';
//     return false;
//   }
?>