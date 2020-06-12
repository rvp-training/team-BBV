<?php

session_start();
include('setting.php');


$stmt = $db->prepare('UPDATE users 
SET is_deleted = true
WHERE id = :id');

$stmt->execute(array(':id' => $_SESSION['selected']));

$count = $stmt->rowCount();

if($count){
  unset($_SESSION['selected']);
  header("Location: ../pages/html/admin/getUsers.php");
}else{
  unset($_SESSION['selected']);
  echo "削除に失敗しました";
}

?>