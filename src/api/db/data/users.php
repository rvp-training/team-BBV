<?php

include '../../(setting).php';

$sql = "INSERT INTO users(name, email, password, department_id, introduction, is_admin)
VALUES
('管理者', 'admin@rvp.co.jp', 'adminp', 4, '管理者１です', true),
('若村健斗', 'kento@rvp.co.jp', 'user02', 1, 'カラオケいこー！！', false),
('安井佑介', 'yuusuke@rvp.co.jp', 'user03', 2, '一児のパパです！', false),
('垣内理奈', 'rina@rvp.co.jp', 'user04', 3, 'リモート飽きた', false),
('松田伸', 'shin@rvp.co.jp', 'user05', 5, '俺か俺以外か', false),
('尾崎仁美', 'hitomi@rvp.co.jp', 'user06', 6, '私が噂のキッチンドリンカー', false),
('水元翔', 'sho@rvp.co.jp', 'user07', 1, 'お願いマッスル！', false),
('林春花', 'haruka@rvp.co.jp', 'user08', 2, '米うまい', false),
('山田太一', 'taichi@rvp.co.jp', 'user09', 3, '人生上り坂', false),
('島田はな', 'hana@rvp.co.jp', 'user10', 5, '新しい山を登ろう', false),
('尾崎由美', 'yumi@rvp.co.jp', 'user11', 6, '夜勤で肌荒れ困る', false),
('浜田正義', 'masayoshi@rvp.co.jp', 'user12', 1, '成績トップに俺はなる', false),
('安西義男', 'yoshio@rvp.co.jp', 'user13', 2, '次の飲み会は酔いつぶれない', false),
('秋田小道', 'komichi@rvp.co.jp', 'user14', 3, '俺は男だ', false),
('一二三工大', 'koudai@rvp.co.jp', 'user15', 5, '人生はいちにさん', false),
('富田唯', 'yui@rvp.co.jp', 'user16', 6, 'ボルダリング大好き！', false),
('祁答院葵', 'aoi@rvp.co.jp', 'user17', 1, 'けどういんと読みます', false),
('安西大樹', 'daiki@rvp.co.jp', 'user18', 2, '人生の大切なことは漫画が教えてくれた', false),
('小野寺満', 'michiru@rvp.co.jp', 'user19', 3, '会いたいくらいじゃ震えない', false),
('大野木みのり', 'minori@rvp.co.jp', 'user20', 5, '困ったらレッドブル', false)";

$res = pg_query($db, $sql);

if ($res){
  print('success');
}else{
  print('error');
}

?>