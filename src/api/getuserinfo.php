<?php


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
        $stmt = $sql->execute(array($id));
        $result = $sql->fetch();
        // while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     print($result['user_name']);
        //     print($result['department_name']);
        //     print($result['introduction']);
        //     print($result['password']);
        //     print($result['image'] ."<br>");
        // }

        return $result;
    }
}
?>