<?php
require('../setting.php');

$db->exec('CREATE TABLE workspaces (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY(id));
  ');
?>