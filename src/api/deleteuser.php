<?php

session_start();
include('setting.php');

//require('setting.php');

$sql = "delete from users where id=$id";
if(!$res=mysql_query($sql)){
    
}

?>