<?php

include("setting.php");

$sql = "SELECT * FROM users LEFT JOIN departments ON users.id = departments.id;";
//$sql = "SELECT id, name, deparment, email, password FROM　users;";
$stmt = $db->query($sql);

//$result = $stmt->fetch(PDO::FETCH_ASSOC)

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    print($result['name']);
    print($result['department_id']);
    print($result['introduction']);
    print($result['password']);
    print($result['image'] ."<br>");
}

?>