<?php

include '../../setting.php';

$sql = "CREATE TABLE likes (
  id serial NOT NULL,
  user_id int REFERENCES users(id),
  post_id int REFERENCES posts(id),
  PRIMARY KEY(id));
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>