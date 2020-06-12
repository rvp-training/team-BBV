<?php
session_start();
include('setting.php');

//パラメータ受け取り
//これがusersテーブルに存在しないidだと失敗する！
$id = $_POST['id'];

if($_FILES['image']['tmp_name']){
    
    $image_name = $id . ".jpeg";
    $stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction, image = :image
                        WHERE id = :id;');
    $stmt->execute(array(':introduction' => $_POST['introduction'], ':image' => $image_name, ':id' => $id));
    move_uploaded_file($_FILES['image']['tmp_name'], "../images/users/" . $image_name);
    $count = $stmt->rowCount();

} else {

    $stmt = $db->prepare('UPDATE users 
                        SET introduction = :introduction
                        WHERE id = :id;');
    $stmt->execute(array(':introduction' => $_POST['introduction'], ':id' => $id));
    $count = $stmt->rowCount();

}


if($count){
    header("Location: ../pages/html/update.php?id=$id");
}else{
    echo "更新に失敗しました";
}


?>