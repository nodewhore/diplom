<?php
$news_id = $_GET['id'];
require_once('../connect.php');

if($delNews = mysqli_query($link,"DELETE FROM `news` WHERE `id` = '$news_id'")){
    $response = 'Новость удалена';
    header('Location: ../apanel.php');
}
else{
    $response = 'Произошла ошибка';
}

?>