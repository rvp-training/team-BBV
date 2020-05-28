<?php

include '../../setting.php';

$sql = "INSERT INTO workspaces (name)
VALUES
('system'),
('private');
";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>