<?php

require('setting.php');

$sql = "SELECT * FROM posts";
foreach($db->query($sql) as $row){
  echo "looping...\n";
  echo $row["title"] . "\n";
  echo $row["id"] . "\n";
}

?>