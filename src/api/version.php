<?php
// 文字コード設定
header('Content-Type: text/json; charset=UTF-8');

try {
  $db = new PDO('pgsql:host=54.238.116.49 ;port=$POSTGRES_PORT:5432;$dbname=$POSTGRES_DB;user=$POSTGRES_USER;password=$POSTGRES_PASSWORD');
  print('接続成功');
} catch(PDOException $e) {
  echo 'DB接続エラー: ' . $e->getMessage();
}

// $connection = pg_connect("host=db dbname=postgres user=postgres password=password");
// $arr['pg'] = pg_version($connection)['client'];
// pg_close($connection);

// $arr["major"] = 0;
// $arr["minor"] = 0;
// $arr["revision"] = 1;

// // 配列をjson形式にデコードして出力, 第二引数は、整形するための定数
// print json_encode($arr, JSON_PRETTY_PRINT);
