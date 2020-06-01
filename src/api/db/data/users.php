<?php

include '../../(setting).php';

$sql = "INSERT INTO users(name, email, password, department_id, image, introduction, is_admin)
VALUES
('田島里菜', 'admin@rvp.com', 'adminp', 4, '1.jpeg', '管理者１です', true),
('若村健斗', 'kento@rvp.com', 'user02', 1, '2.jpeg', 'カラオケいこー！！', false),
('安井佑介', 'yuusuke@rvp.com', 'user03', 2, '3.jpeg', '一児のパパです！', false),
('垣内理奈', 'rina@rvp.com', 'user04', 3, '4.jpeg', 'リモート飽きた', false),
('松田伸', 'shin@rvp.com', 'user05', 5, '5.jpeg', '俺か俺以外か', false),
('尾崎仁美', 'hitomi@rvp.com', 'user06', 6, '6.jpeg', '私が噂のキッチンドリンカー', false),
('水元翔', 'sho@rvp.com', 'user07', 1, '7.jpeg', 'お願いマッスル！', false),
('林春花', 'haruka@rvp.com', 'user08', 2, '8.jpeg', '米うまい', false),
('山田太一', 'taichi@rvp.com', 'user09', 3, '9.jpeg', '人生上り坂', false),
('島田はな', 'hana@rvp.com', 'user10', 5, '10.jpeg', '新しい山を登ろう', false),
('尾崎由美', 'yumi@rvp.com', 'user11', 6, '11.jpeg', '夜勤で肌荒れ困る', false),
('浜田正義', 'masayoshi@rvp.com', 'user12', 1, '12.jpeg', '成績トップに俺はなる', false),
('安西義男', 'yoshio@rvp.com', 'user13', 2, '13.jpeg', '次の飲み会は酔いつぶれない', false),
('秋田小道', 'komichi@rvp.com', 'user14', 3, '14.jpeg', '俺は男だ', false),
('一二三工大', 'koudai@rvp.com', 'user15', 5, '15.jpeg', '人生はいちにさん', false),
('富田唯', 'yui@rvp.com', 'user16', 6, '16.jpeg', 'ボルダリング大好き！', false),
('祁答院葵', 'aoi@rvp.com', 'user17', 1, '17.jpeg', 'けどういんと読みます', false),
('安西大樹', 'daiki@rvp.com', 'user18', 2, '18.jpeg', '人生の大切なことは漫画が教えてくれた', false),
('小野寺満', 'michiru@rvp.com', 'user19', 3, '19.jpeg', '会いたいくらいじゃ震えない', false),
('大野木みのり', 'minori@rvp.com', 'user20', 5, '20.jpeg', '困ったらレッドブル', false)";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>