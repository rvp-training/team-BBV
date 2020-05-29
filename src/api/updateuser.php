<?php


try {

    $dbh = require('setting.php');
    
    $stmt = $dbh->prepare('UPDATE users SET name = :name, department = :department, password = :password WHERE id = :id');

    $stmt->execute(array(':name' => $_POST['name'], ':department' => $_POST['department'], ':password' => $_POST['password']));

    echo "情報を更新しました。";

} catch (Exception $e) {
          echo 'エラーが発生しました。:' . $e->getMessage();
}



?>