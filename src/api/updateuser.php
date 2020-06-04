<?php
session_start();
include('setting.php');


$stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction, image = :image 
                        WHERE id = :id;');

$result = $stmt->execute(array(':introduction' => $_POST['introduction'], ':image' => $_POST['image'], ':id' => $_SESSION['id']));


if($result){
    unset($_SESSION['id']);
    header("Location: ../pages/html/update.php");
}else{
    echo "更新に失敗しました";
}


?>