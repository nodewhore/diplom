<?php
session_start();
$login=$_POST['login'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_BCRYPT);
require_once('../../apanel/connect.php');
echo $login;
echo $password;
if($check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'")){
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "username" => $user['username'],
            "email" => $user['email'],
            "login" => $user['login'],
            "rights" => $user['rights'],
            "number" => $user['number'],
            "password" => $user['password'],
            "avatar" => $user['avatar']
        ];    
        $user_id=$_SESSION['user']['id'];
        $date=date('d-m-y H:i');
        $logs=mysqli_query($link,"INSERT INTO `logs` (`id`, `user_id`, `datetime`, `status`, `attempt`) VALUE (NULL,'$user_id','$date', 'Пользователь авторизовался', '0', '$ip')");
        header('Location: ../index.php');
    }

}
?> 