<?php

require(dirname(__FILE__) . '/../setting.php');

$myposts = array(
    [
        "post_id" => 1,
        "title" => "タイトルその1",
        "created_at" => "2020-01-01",
        "image_path" => "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
    ],
    [
        "post_id" => 2,
        "title" => "タイトルその2",
        "created_at" => "2020-01-02",
        "image_path" => "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
    ],
    [
        "post_id" => 3,
        "title" => "タイトルその3",
        "created_at" => "2020-01-03",
        "image_path" => "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
    ],
    [
        "post_id" => 4,
        "title" => "タイトルその4",
        "created_at" => "2020-01-04",
        "image_path" => "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
    ]
);



// JSONを目指していた頃の軌跡
// $myposts = json_encode($arr, JSON_UNESCAPED_UNICODE);

?>