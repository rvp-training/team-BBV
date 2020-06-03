<?php
session_start();
include('setting.php');
//var_dump($_SESSION['selected']);

$stmt = $db->prepare('UPDATE users 
                        SET name = :name, department_id = :department_id, password = :password 
                        WHERE id = :id');

$result = $stmt->execute(array(':name' => $_POST['name'], ':department_id' => $_POST['department_id'], ':password' => $_POST['password'], ':id' => $_SESSION['selected']));

//var_dump($_POST);

if($result){
    unset($_SESSION['selected']);
    header("Location: ../pages/html/admin/getUsers.php");;
}else{
    echo "更新に失敗しました";
}


?>