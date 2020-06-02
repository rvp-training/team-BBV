<?php
include("setting.php");
class user{

    public function getUserInfo(id){

        $sql = "SELECT users.name as user_name, departments.name as department_name, introduction, password, image
                FROM users
                LEFT JOIN departments
                ON users.department_id = departments.id
                WHERE user.id=?";
        ？にidをわたす記述
        //$sql = "SELECT id, name, deparment, email, password FROM　users;";
        $stmt = $db->query($sql);

        //$result = $stmt->fetch(PDO::FETCH_ASSOC)

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            print($result['user_name']);
            print($result['department_name']);
            print($result['introduction']);
            print($result['password']);
            print($result['image'] ."<br>");
        }

        return hoge;
    }
}
?>