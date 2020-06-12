<?php
include('setting.php');

$stmt = $db->prepare('UPDATE users 
                        SET name = :name, department_id = :department_id, password = :password 
                        WHERE id = :id');

$stmt->execute(array(':name' => $_POST['name'], ':department_id' => $_POST['department_id'], ':password' => $_POST['password'], ':id' => $_POST['id']));

$count = $stmt->rowCount();

if($count){
    header("Location: ../pages/html/admin/getUsers.php");
}else{
    echo "更新に失敗しました";
}


?>