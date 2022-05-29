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
<h1 class="mt-5">Изменение новости</h1>
    <?php
    require_once('apanel/connect.php');
    $newsId = $_GET['id'];
    $news = mysqli_query($link,"SELECT * FROM `news` WHERE `id` = '$newsId'");
    $news = mysqli_fetch_all($news);
    foreach($news as $news){
        ?>
    <form action="/updates" method="post" enctype="multipart/form-data">
    <label for="form">ID</label>
    <input type="text" name="id" class="form-control" value="<?=$news[0]?>">
    <label for="form">Название</label>
    <input type="text" name="name" class="form-control" value="<?=$news[1]?>">
    <label for="">Текст новости</label>
    <textarea name="text" class="form-control" id="" cols="20" rows="10">"<?=$news[2]?></textarea>

    <br>
    <label for="form">Выберите Изображение</label>
    <input type="file" class="form-control" name="news" multiple accept="image/jpeg,image/png"> 
    <br>    
    <input type="submit" class="form-control" style="background-color:rgb(188, 8, 188);border:none; color:#fff;" value="Редактировать">
    </form>
        <?php
    }
        ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>