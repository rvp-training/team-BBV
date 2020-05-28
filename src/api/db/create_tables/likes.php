<?php
require('../setting.php');

$db->exec('CREATE TABLE likes (
  id serial NOT NULL,
  user_id int REFERENCES users(id),
  post_id int REFERENCES posts(id)
  PRIMARY KEY(id));
  ');
?>