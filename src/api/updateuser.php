<?php


try {

    include('setting.php');
    
    $stmt = $db->prepare('UPDATE users 
                            SET name = :name, department = :department, password = :password 
                            WHERE id = :id');

    $stmt->execute(array(':name' => $_PATCH['name'], ':department' => $_PATCH['department'], ':password' => $_PATCH['password']));

    //echo "情報を更新しました。";

} catch (Exception $e) {
          echo 'エラーが発生しました。:' . $e->getMessage();
}



?>