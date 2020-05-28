<?php

include '../../setting.php';

$sql = "CREATE TABLE users (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) UNIQUE NOT NULL,
  password varchar(255) NOT NULL,
  department_id int REFERENCES departments(id),
  image varchar(255),
  introduction varchar(255),
  is_admin boolean NOT NULL DEFAULT false,
  updated_at timestamp NOT NULL,
  is_deleted boolean NOT NULL DEFAULT false,
  PRIMARY KEY(id));
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>