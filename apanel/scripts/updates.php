<?php
session_start();
$newsId = $_POST['id'];
require('apanel/connect.php');
$name = $_POST['name'];
$text = $_POST['text'];
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
$name =clean($name);
$text =clean($text);
$path = 'App/images/news/' . time() . $_FILES['news']['name'];
if (!move_uploaded_file($_FILES['news']['tmp_name'], '' . $path)) {
echo "Ошибка";
}
else{
    $userUpdate = $link->query("UPDATE `news` SET `title` = '$name', `text` = '$text',  `image` = '$path' WHERE `news`.`id` = '$newsId';");
    header('Location: /admin');
}
