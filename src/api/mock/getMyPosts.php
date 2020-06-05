<?php

require(dirname(__FILE__) . '/../setting.php');

$stmt = $db->prepare('SELECT :post_id, title, created_at, image_path
                        FROM posts
                        INNER JOIN comments
                        ON posts.user_id = comments.user_id
                        ORDER BY created_at DESC  
                        ');
var_dump($stmt);

$response = $sql ->execute(array(':post_id' => $_GET["post_id"]));


$myposts = array(
    [
        "post_id" => 1,
        "title" => "タイトルその1",
        "created_at" => "2020-01-01",
        "image_path" => [
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
            "https://1.bp.blogspot.com/-N08ojzWTStM/VdLrmt8nTzI/AAAAAAAAwuU/1o3JOcdtHNM/s800/business_senryaku_sakuryaku_man.png",
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
            "https://3.bp.blogspot.com/-tz29ejVEr0Y/XDXcjkfSKlI/AAAAAAABRK8/Vg_Bp5WuJDA0f2qByfygRgAxm7VObcCQACLcBGAs/s800/nigaoe_prokofiev.png",
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
            "https://www.irasutoya.com/2015/08/blog-post_396.html",
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
        ]
    ],
    [
        "post_id" => 2,
        "title" => "タイトルその2",
        "created_at" => "2020-01-02",
        "image_path" => [
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
            "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
        ]
    ],
    [
        "post_id" => 3,
        "title" => "タイトルその3",
        "created_at" => "2020-01-03",
        "image_path" => ["https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
        ]
    ],
    [
        "post_id" => 4,
        "title" => "タイトルその4",
        "created_at" => "2020-01-04",
        "image_path" => ["https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
        ]
    ]
);



// JSONを目指していた頃の軌跡
// $myposts = json_encode($arr, JSON_UNESCAPED_UNICODE);

?>