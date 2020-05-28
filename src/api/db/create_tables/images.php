<?php
require('../setting.php');

$db->exec('CREATE TABLE images (
  id serial NOT NULL,
  post_id int REFERENCES posts(id),
  image varchar(255) NOT NULL,
  PRIMARY KEY(id));
  ');
?>