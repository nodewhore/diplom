<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="App/css/style.css">
    <link rel="shortcut icon" href="App/images/favicon/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Вокальный кружок ТОН</title>
</head>
<body>
    <!--
        Preloader
    -->
    <!--
        Модалка
    -->
<?php
require ('require/preloader.html');
require ('require/modals.html');
require ('require/nav.html');
?>

</header>
<div class="container">

<h1 class="text-center mt-5">Информация о кружке</h1>
<h4 class="mt-3">Задачи</h4>
<p>Занятия в кружке пробуждают у воспитанников интерес к вокальному

искусству, что даёт возможность основываясь на симпатиях ребёнка, развивать его музыкальную культуру и школьную эстраду.</p>
<p>Основной формой работы является музыкальное занятие, которое предполагает взаимодействие педагога с детьми и строится на основе индивидуального подхода к ребенку.</p>
<ul style = "list-style-type:none; padding:0; font-size:24px;">

<li> 1. Научить воспринимать музыку и вокальные произведения .</li>

<li> 2. Помочь детям овладеть основными певческими навыками (чистота</li>

интонирования, правильное дыхание, звукообразование).</li>

<li> 3. Ознакомить и научить необходимым знаниям и умениям поведения на сцене

<li>4. Развить музыкально-эстетический вкус;</li>

<li>5. Развить музыкальные способности обучающихся;</li>

<li>6. Создать условия для пополнения словарного запаса, а также успешной социализации обучающихся</li>

</ul>

</div>
<?php
require ('require/footer.html');
?>


<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="App/js/main.js"></script>
</body>
</html>