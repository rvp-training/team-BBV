<?php
try {
  $db = new PDO('pgsql:dbname=postgres;host=db','postgres','password');
} catch (PDOException $e) {
  echo 'DB接続エラー：' . $e->getMessage();
}

?>