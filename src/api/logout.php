<?php

session_start();

if (isset($_SESSION['id'])) {
  //セッションを終了し、一般ユーザー用ログイン画面にリダイレクト
  $_SESSION = array();
  session_destroy();
  header('Location: ../pages/html/login.php');
} else {
  echo '無効なアクセスです。';
}

?>