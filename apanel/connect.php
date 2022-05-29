<?php
$user = 'root';
$password = '';
$db_name = 'ton';
$host = 'localhost';

$link = new mysqli($host,$user,$password,$db_name);
$link->set_charset('utf8');


?>