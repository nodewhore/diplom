<?php

require_once('apanel/connect.php');
    $title=$_POST['title'];
    $category=$_POST['category'];
    $path = 'App/images/gallery/' . time() . $_FILES['news']['name'];
        if (!move_uploaded_file($_FILES['news']['tmp_name'], '' . $path)) {
        echo "Ошибка";
    }
    $new=mysqli_query($link, "INSERT INTO `gallery` (`id`, `name`, `image`, `category`) VALUES (NULL, '$title', '$path', '$category')");
    if(!$new){
        header('Location: /admin_gallery');
    }
    else{
        header('Location: /admin_gallery');
    }
    ?>