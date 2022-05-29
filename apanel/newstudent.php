<?php
session_start();
if(!empty($_SESSION['user'])){
$userAdmin = $_SESSION['user']['rights'];
if($userAdmin == '0'){
  header('Location: /');
}
else{
  if($userAdmin == '0'){
    header('Location: /');
  }
}
}
else{
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
<?php
require('require/navAdmin.html');
?>
<div class="container">
    <h1 class="text-center mt-5">Добавление учеников в кружок</h1>
    <form action="/adduser" method="POST" enctype="multipart/form-data">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Фио ученика</label>
  <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Иванов Иван Иванович" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Логин</label>
  <input name="login" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ivanov" required>
</div>
<div class="mb-0">
  <label for="exampleFormControlTextarea1" class="form-label">Пароль</label>
  <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="qwerty" required>
</div>
              <br>
  <button type="submit" class="btn btn-outline-light mt-5" style="width:100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Добавить</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>