<?php

require(dirname(__FILE__) . '/../setting.php');

$post_detail = array(
    "title" => "タイトルです",
    "text" => "テキスト本文です",
    "workspace" => "private",
    "created_at" => "2020-01-01",
    "username" => "投稿ユーザ名",
    "introduction" => "投稿ユーザ紹介文",
    "user_image_path" => "https://1.bp.blogspot.com/-b1lzsXdciGg/Wn1VwLXfeRI/AAAAAAABKE0/spmG8LkPl7IrAxLQMAdLrgw34Kxo1PlbACLcBGAs/s800/computer_man1_smile.png",
    "department" => "情報システム部",
    "image_path" => [
        "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
        "https://1.bp.blogspot.com/-N08ojzWTStM/VdLrmt8nTzI/AAAAAAAAwuU/1o3JOcdtHNM/s800/business_senryaku_sakuryaku_man.png",
        "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
        "https://3.bp.blogspot.com/-tz29ejVEr0Y/XDXcjkfSKlI/AAAAAAABRK8/Vg_Bp5WuJDA0f2qByfygRgAxm7VObcCQACLcBGAs/s800/nigaoe_prokofiev.png",
        "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg",
        "https://www.irasutoya.com/2015/08/blog-post_396.html",
        "https://wired.jp/wp-content/uploads/2018/01/GettyImages-522585140.jpg"
    ],
    "like_count" => 4,
    "comments" => [
        [
            "comment_user" => "コメントマン",
            "comment_text" => "コメントするぞ！",
            "comment_created_at" => "2020-01-02"
        ],
        [
            "comment_user" => "コメントマンに便乗するマン",
            "comment_text" => "おれもコメントするぞ！",
            "comment_created_at" => "2020-01-04"
        ]
    ]
);

// {
//     title: string,
//     text: string,
//     created_at: string,
//     username: string,
//     introduction: string,
//     user_image_path: string,
//     department: string,
//     image_path: string[],
//     like_count: int,
//     comments: {
//     comment_user: string,
//     comment_text: string,
//     comment_created_at: string
//     }[]
// }
