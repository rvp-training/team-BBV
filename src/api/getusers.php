<?php

include("setting.php");

$sql = "SELECT users.id as user_id, users.name as user_name, email, password, departments.name as department_name
        FROM users
        LEFT JOIN departments
        ON users.department_id = departments.id";
//$sql = "SELECT * FROM users, departments WHERE users.department_id = departments.id;";
//$sql = "SELECT id, name, deparment, email, password FROM　users;";
$stmt = $db->query($sql);
//var_dump ($stmt);
//$result = $stmt->fetch(PDO::FETCH_ASSOC)


/*
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    print($result['user_id']);
    print($result['user_name']);
    print($result['department_name']);
    print($result['email']);
    print($result['password'] ."<br>");
}
*/
?>