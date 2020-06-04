<?php

session_start();
include('setting.php');

    
$stmt = $db->prepare('UPDATE users 
SET is_deleted = true
WHERE id = :id');

$result = $stmt->execute(array(':id' => $_SESSION['selected']));

if($result){
unset($_SESSION['selected']);
header("Location: ../pages/html/admin/getUsers.php");
}else{
echo "削除に失敗しました";
}



?>