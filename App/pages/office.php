<?php
session_start();
$user_id = $_SESSION['user']['id'];
if(empty($user_id)){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Вокальный кружок ТОН</title>
</head>
<body>
<div class="container" style="min-height:100vh;">
    <header>
        <h4 class="mt-5">Личный кабинет</h4>
        <div class="navbar_user">
        <a href="index.php" class="back">Вернуться на сайт</a>
        <a href="App/scripts/logout.php" class="back" style="float:right;">Выход</a>
        </div>
    </header>
<?php
require_once('apanel/connect.php');
$user = $link->query("SELECT * FROM `users` WHERE `id` = '$user_id'")->fetch_all();
foreach($user as $user){
?>
    <div class="user_info">
        <div class="user_avatar">
            <img src="<?=$user[6]?>" alt="avatar" class="user_avatars">
        </div>
        <div class="user_base">
    <h5 class="mt-5">Ваши данные</h5>
    <p>Имя: <?=$user[3]?></p>
    <p>Номер телефона: <?=$user[4]?></p>
    <p>E-mail: <?=$user[5]?></p>
    <input type="button" class="popup_button" value="Изменить профиль">
    </div>
    </div>
    <?php
    }
    ?>
</div>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>