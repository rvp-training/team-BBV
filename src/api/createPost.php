<?php


$image = date('YmdHis') . $_FILES['image']['name'];
// アップロード処理
// tmp_name 一時的にアップロードされている場所
// move_uploaded_file(今ある場所、移動先)
move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/' . $image);

?>