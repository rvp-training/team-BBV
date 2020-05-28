<?php

require('setting.php');

$sql = "SELECT * FROM posts";
$res = $db->query($sql);

foreach($res as $row){
  echo $row["title"];
  echo $row["id"];
}

?>