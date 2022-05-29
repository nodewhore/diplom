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
<h1 class = "mt-5"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg> Список новостей</h1>
    <table class="table table-dark table-striped-columns">
    <tr class="table-dark">
    <td class="table-dark">ID</td>
    <td class="table-dark">Название новости</td>
    <td class="table-dark">Текст новости</td>
    <td class="table-dark">Дата</td>
    <td class="table-dark">Изображение</td>
    <td class="table-dark"></td>
    <td class="table-dark"></td>
    </tr>
    <?php
    require_once('apanel/connect.php');
    $news = mysqli_query($link,"SELECT * FROM `news`");
    $news = mysqli_fetch_all($news);
    foreach($news as $news){
        ?>
    <tr class="table-dark">
    <td class="table-dark"><?=$news[0]?></td>
    <td class="table-dark"><?=$news[1]?></td>
    <td class="table-dark"><?=$news[2]?></td>
    <td class="table-dark"><?=$news[3]?></td>
    <td class="table-dark"><img src="../<?=$news[4]?>" alt="news-admin" class="news_admin"></td>
    <td class="table-dark"><a href="/deletenews?id=<?=$news[0]?>" class="crud" style="color:red;">Удалить</a></td>
    <td class="table-dark"><a href="/updatenews?id=<?=$news[0]?>" class="crud" style="color:green;">Изменить</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<h1 class="mt-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Добавить новость</h1>
<form action="/addnews" method="POST" enctype="multipart/form-data">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Название новости</label>
  <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Новая новость">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Текст новости</label>
  <textarea name="text" class="form-control" id="exampleFormControlTextarea1" style="resize:none;" rows="2"></textarea>
  <label>Изображение новости</label>
          <br>
              <input type="file" class="form-control" name="news" multiple accept="image/jpeg,image/png"> 
              <br>
  <button type="submit" class="btn btn-outline-light mt-5" style="width:100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Добавить</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>