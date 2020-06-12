<?php
session_start();
include('setting.php');

$stmt = $db->prepare('UPDATE users 
                        SET name = :name, department_id = :department_id, password = :password 
                        WHERE id = :id');

$stmt->execute(array(':name' => $_POST['name'], ':department_id' => $_POST['department_id'], ':password' => $_POST['password'], ':id' => $_SESSION['selected']));

$count = $stmt->rowCount();

if($count){
    unset($_SESSION['selected']);
    header("Location: ../pages/html/admin/getUsers.php");
}else{
    unset($_SESSION['selected']);
    echo "更新に失敗しました";
}


?>