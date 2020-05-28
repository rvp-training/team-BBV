<?php

$db = pg_connect("host=db dbname=postgres user=postgres password=password");
if(!$connection){
  print('db接続エラーです');
}

?>