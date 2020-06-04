<?php
// 未完成につき仮置き
require(dirname(__FILE__) . 'setting.php');

$sql = "SELECT * FROM posts WHERE id = :post_id";
$response = $db->execute($sql, $_POST["post_id"]);
?>