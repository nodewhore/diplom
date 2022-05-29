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
    <h1 class="text-center mt-5">Список учеников</h1>
    <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ФИО</th>
        <th scope="col">Логин</th>
        <th scope="col">Пароль</th>
      </tr>
    </thead>
<?php
require('apanel/connect.php');
$students = $link->query("SELECT * FROM `users` WHERE `rights` != 1");
$students = mysqli_fetch_all($students);
foreach($students as $students){
?>
    <tbody?>
      <tr class="table-active">
        <th scope="row"><?=$students[0]?></th>
        <td><?=$students[1]?></td>
        <td><?=$students[2]?></td>
        <td><?=$students[3]?></td>
      </tr>
</tbody>
<?php
}
?>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>