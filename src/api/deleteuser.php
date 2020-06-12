<?php

include('setting.php');

$id = $_POST['id'];

$stmt = $db->prepare('UPDATE users 
SET is_deleted = true
WHERE id = :id');

$stmt->execute(array(':id' => $id));

$count = $stmt->rowCount();

if($count){
  header("Location: ../pages/html/admin/getUsers.php");
}else{
  echo "削除に失敗しました";
}

?>