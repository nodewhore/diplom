<?php
session_start();
include_once('apanel/connect.php');
$login = trim($_POST['login']);
$password = md5(trim($_POST['pass']));
if(!empty($login) and !empty($password)){
$len = strlen($password);
if($len<6){
    $response = 'Некорректный пароль';
    echo $response;
}
else{
    $auth = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($auth);
    $auth = mysqli_num_rows($auth);
    if($auth==1){
        $_SESSION['user'] = [
            "id" => $user['id'],
            "rights" => $user['rights']
        ];
        header('Location: /');
    }
    else{
        $response = 'Неверный логин или пароль';
        echo $response;
    }
}
}
else{
    $response = "Заполните все поля";
}