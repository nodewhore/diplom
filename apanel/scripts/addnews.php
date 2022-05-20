<?php

require_once('apanel/connect.php');
    $title=$_POST['title'];
    $text=$_POST['text'];
    $date=date('Y/m/d');
    $autor="Школа";
    $path = 'App/images/news/' . time() . $_FILES['news']['name'];
        if (!move_uploaded_file($_FILES['news']['tmp_name'], '' . $path)) {
        echo "Ошибка";
    }
    $new=mysqli_query($link, "INSERT INTO `news` (`id`, `autor`, `title`, `text`, `date`, `image`) VALUES (NULL, '$autor', '$title', '$text', '$date', '$path')");
    if(!$new){
        header('Location: /admin');
    }
    else{
        header('Location: /admin');
    }
    ?>