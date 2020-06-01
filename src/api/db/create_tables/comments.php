<?php

include '../../(setting).php';

$sql = "CREATE TABLE comments (
  id serial NOT NULL,
  post_id int REFERENCES posts(id),
  user_id int REFERENCES users(id),
  text varchar(8000) NOT NULL,
  created_at timestamp NOT NULL,
  PRIMARY KEY(id));
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>