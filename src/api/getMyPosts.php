<?php
session_start();
require(dirname(__FILE__) . '/setting.php');

$user_id = $_SESSION["id"];

$stmt = $db->prepare("SELECT p.id, p.title, p.created_at, i.image as image_path
        FROM posts p
        INNER JOIN images i
        ON p.id = i.post_id
        WHERE p.user_id = :user_id
        ORDER BY p.created_at DESC
        ");

$stmt->execute(array(':user_id' => $user_id));

// $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

$myposts = array();

foreach ($stmt as $row) {
    if (!array_key_exists($row['id'], $myposts)) {
        $myposts[$row['id']] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'created_at' => $row['created_at'],
            'image_path' => array()
        );
    }
    $myposts[$row['id']]['image_path'][] = $row['image_path'];
}