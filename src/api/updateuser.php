<?php
session_start();
include('setting.php');

if($_FILES['image']['tmp_name']){
    
    $image_name = $_SESSION['id'] . ".jpeg";
    $stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction, image = :image
                        WHERE id = :id;');
    $result = $stmt->execute(array(':introduction' => $_POST['introduction'], ':image' => $image_name, ':id' => $_SESSION['id']));
    move_uploaded_file($_FILES['image']['tmp_name'], "../images/users/" . $image_name);

} else {

    $stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction
                        WHERE id = :id;');
    $result = $stmt->execute(array(':introduction' => $_POST['introduction'], ':id' => $_SESSION['id']));
    
}


if($result){
    header("Location: ../pages/html/update.php");
}else{
    echo "更新に失敗しました";
}


?>