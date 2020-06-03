<?php
session_start();

$userId = $_SESSION['id'];
var_dump($_FILES);

//配列だから繰り返し処理が必要
// ["image"] => {
//   ["name"] => {0..9},
//   ["tmp_name"] =>{0..9}
// }

//名前をつける
// $image = date('YmdHis') . $_FILES['image']['name'];
//保存したいディレクトリに移動
// move_uploaded_file($_FILES['image']['tmp_name'], '../images/uploads/' . $image);

// $image = date('YmdHis') . 
// アップロード処理
// tmp_name 一時的にアップロードされている場所
// move_uploaded_file(今ある場所、移動先)

?>