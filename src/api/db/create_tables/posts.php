<?php
require('../setting.php');

$db->exec('CREATE TABLE posts (
  id serial NOT NULL,
  user_id int REFERENCES users(id),
  workspace_id int REFERENCES workspaces(id),
  title varchar(255) NOT NULL,
  text varchar(8000),
  created_at timestamp NOT NULL,
  PRIMARY KEY(id));
  ');
?>