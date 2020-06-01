<?php

include("setting.php");

$sql = "SELECT id, name, deparment_id, email, password, departments.name as department
        FROM departments
        LEFT JOIN users
        ON users.department_id = departments.id;";
//$sql = "SELECT * FROM users, departments WHERE users.department_id = departments.id;";
//$sql = "SELECT id, name, deparment, email, password FROM　users;";
$stmt = $db->query($sql);
//var_dump ($stmt);
//$result = $stmt->fetch(PDO::FETCH_ASSOC)

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    print($result['id']);
    print($result['name']);
    print($result['department']);
    print($result['email']);
    print($result['password'] ."<br>");
}

?>