<?php
require('../setting.php');

$db->exec('CREATE TABLE departments (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY(id));
  ');
?>