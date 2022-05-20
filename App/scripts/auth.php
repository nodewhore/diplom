<?php
session_start();
$login=$_POST['login'];
$password=$_POST['pass'];
// $password=md5($password);
echo $login, '<br/>';
echo $password;
require_once('apanel/connect.php');
if($check = $link->query("SELECT * FROM `users` WHERE `login` = '$login'  AND `password` = '$password'")){
    // if($check_users = mysqli_num_rows($check) > 0){
    // echo $check_users;
    $user = $link->query("SELECT * FROM users WHERE id = 1");
    $user = mysqli_fetch_assoc($user);
        foreach($user as $user){
            echo $user[3];      
        }  
    
}
// }