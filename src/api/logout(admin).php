<?php

session_start();

if (isset($_SESSION['id'])) {
  //セッションを終了し、管理者用ログイン画面にリダイレクト
  $_SESSION = array();
  session_destroy();
  header('Location: ../pages/html/admin/login.php');
} else {
  echo '無効なアクセスです。';
}

?>