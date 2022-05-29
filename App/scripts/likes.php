<?php
session_start();
require_once('apanel/connect.php');
if(!empty($_SESSION['user'])){
$news_id = $_GET['post'];
$user_id=$_GET['id'];
if($qwer=$link->query("SELECT * FROM `likes` WHERE `user_id` = '$user_id' AND `post_id` = '$news_id'")){
    $qwerty=mysqli_fetch_assoc($qwer);
    if($qwerty>0){
        $like_delete=$link->query("DELETE FROM `likes` WHERE `user_id` = '$user_id' AND `post_id` = '$news_id'");
        header('Location: /news');
    }
    elseif($link->query("INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES (NULL, '$user_id', '$news_id')")){
        header('Location: /news');
    }
}
}
else{
    header('Location: /auth');
}
?>