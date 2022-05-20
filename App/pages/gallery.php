<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
require ('require/preloader.html');
require ('require/modals.html');
require ('require/nav.html');
?>
<div class="container">
    <h1 class="text-center mt-5">Галерея</h1>
    <div class="goods">
        <div class="good">
            <div class="good-name">
                <p>Дипломы</p>
                <div class="good-image">
                    <img src="The1975.jpg" class="good_image" alt="">               
                 </div>
                 <br>
                    <a href="" class="buy">Записаться</a>
                    <a href="" class="buy">Избранное</a>
            </div>
        </div>
 
    </div>
</div>
<div class="popup" id="popup">
    <div class="popup_cont">
        <div class="popup_body">
            <p class="authP">Авторизация</p>
        <form action="">
            <div class="login">
<input type="text" name="" id="login" class="popup_input" placeholder="Login or E-mail">
</div>
<div class="password">
<input type="text" name="" id="password" class="popup_input" placeholder="Password">
</div>
<button type="submit" class="popup_button">login</button>

        </form>
<a href="">Забыли пароль?</a>
<p>Нет аккаунта? <a href="">Зарегистрироваться</a></p>

            <div class="pclose"><a href="" id="pclose">X</a></div>
        </div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>