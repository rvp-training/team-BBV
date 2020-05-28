<?php
require('../setting.php');

$db->exec('CREATE TABLE comments (
  id serial NOT NULL,
  post_id int REFERENCES posts(id),
  user_id int REFERENCES user(id),
  text varchar(8000) NOT NULL,
  created_at datetime NOT NULL,
  PRIMARY KEY(id));
  ');
?>