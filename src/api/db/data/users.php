<?php
require('../setting.php');

$db->exec('INSERT INTO users(name, email, password, department_id, image, introduction, is_admin, updated_at, is_deleted)
VALUES
('岩崎梢', 'kze@gmail.com', 'password', 1, 'kozue.png', '紹介文です', ),
(''),
('');

');


?>