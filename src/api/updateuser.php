<?php
session_start();
include('setting.php');

$stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction 
                        WHERE id = :id;');

$result = $stmt->execute(array(':introduction' => $_POST['introduction'], ':id' => $_SESSION['id']));


if($result){
    header("Location: ../pages/html/update.php");
}else{
    echo "更新に失敗しました";
}

move_uploaded_file($_FILES['image']['tmp_name'], "../images/users/".$_SESSION['id'].".jpeg");

?>