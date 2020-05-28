<?php
include '../../setting.php';

$sql = "CREATE TABLE departments (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY(id));
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>