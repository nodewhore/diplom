<?php
session_start();
$user_id = $_SESSION['user']['id'];
if(empty($user_id)){
    header('Location: /');
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
        <h4 class="mt-5">Изменение профиля</h4>
        <div class="navbar_user">
        <a href="/" class="back">Вернуться на сайт</a>
        <a href="/office" class="back">Личный кабинет</a>
        <?php
        if($_SESSION['user']['rights']==1){
            ?>
        <a href="/admin" class="back">Панель админинстратора</a>
        <?php
        }
        ?>
        <a href="/logout" class="back" style="float:right;">Выход</a>
        </div>
    </header>
<?php
require_once('apanel/connect.php');
$user = $link->query("SELECT * FROM `users` WHERE `id` = '$user_id'")->fetch_all();
foreach($user as $user){
?>
<div class="container mt-5">
    <form action="/updateusers" method="post" enctype="multipart/form-data">
    <label for="form">Имя</label>
    <input type="text" name="name" class="form-control" value="<?=$user[1]?>">
    <label for="form">Номер телефона</label>
    <input type="text" name="number" class="form-control" value="<?=$user[4]?>">
    <label for="form">E-mail</label>
    <input type="text" name="email" class="form-control" value="<?=$user[5]?>">
    <br>
    <label for="form">Выберите аватар</label>
    <input type="file" class="form-control" name="avatar" multiple accept="image/jpeg,image/png"> 
    <br>    
    <input type="submit" class="form-control" style="background-color:rgb(188, 8, 188);border:none; color:#fff;" value="Редактировать">

<?php
}
?>
</form>
</div>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>