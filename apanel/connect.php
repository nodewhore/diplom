<?php
$user = 'root';
$password = '';
$db_name = 'ton';
$host = 'localhost';

$link = mysqli_connect($host,$user,$password,$db_name);

$link->set_charset('utf8');
?>