<?php

include '../../(setting).php';

$sql = "INSERT INTO departments (name)
VALUES
('総務部'),
('経理部'),
('業務部'),
('情報システム部'),
('商品部'),
('営業部');
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>