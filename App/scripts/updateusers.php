<?php
session_start();
$userId = $_SESSION['user']['id'];
require('apanel/connect.php');
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
$name =clean($name);
$number =clean($number);
$email =clean($email);
$path = 'App/images/avatars/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '' . $path)) {
echo "Ошибка";
}
else{
    $userUpdate = $link->query("UPDATE `users` SET `name` = '$name', `number` = '$number', `email` = '$email' , `avatar` = '$path' WHERE `users`.`id` = '$userId';");
    header('Location: /office');
}
