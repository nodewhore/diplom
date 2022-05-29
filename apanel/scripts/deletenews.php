<?php
$news_id = $_GET['id'];
require_once('apanel/connect.php');

if($delNews = mysqli_query($link,"DELETE FROM `news` WHERE `id` = '$news_id'")){
    $response = 'Новость удалена';
    header('Location: /admin');
}
else{
    $response = 'Произошла ошибка';
    header('Location: /admin');
}

?>