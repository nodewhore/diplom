<?php
require('apanel/connect.php');
$name = trim($_POST['name']);
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$nameLen = strlen($name);
$loginLen = strlen($login);
$passwordLen = strlen($password);
function clean($value = "") {
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

$name = clean($name);
$name = clean($login);
$name = clean($password);
echo $name;
if(($nameLen and $loginLen and $passwordLen)<6){
   
    $response = "Недопустимая длинна логина или пароля" ;
    echo $response;
}
else{
    $userAdd = $link->query("INSERT INTO ");
}
?>