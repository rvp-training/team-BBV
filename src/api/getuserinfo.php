<?php

//ユーザ個別の情報を取得する関数

//サイドバーでログイン中ユーザー名を呼び出す
//ユーザー編集画面（一般・管理者）で初期値を呼び出す
//ユーザ削除確認画面で名前と部署名を呼び出す

class User{

    function getUserInfo($id){

        include("setting.php");
        $sql = $db->prepare("SELECT u.name as name, d.name as department, introduction, password, image
                FROM users u
                LEFT JOIN departments d
                ON u.department_id = d.id
                WHERE u.id=?");
        $sql->execute(array($id));
        $result = $sql->fetch();

        return $result;
    }
}
?>