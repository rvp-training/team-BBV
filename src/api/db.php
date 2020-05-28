<?php

$db = pg_connect("host=db dbname=postgres user=postgres password=password");
if(!$db){
  print('db接続エラーです');
}

?>