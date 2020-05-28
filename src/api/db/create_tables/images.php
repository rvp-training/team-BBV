<?php

include '../../setting.php';

$sql = "CREATE TABLE images (
  id serial NOT NULL,
  post_id int REFERENCES posts(id),
  image varchar(255) NOT NULL,
  PRIMARY KEY(id));
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>