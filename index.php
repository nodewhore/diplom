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
<section class="info">
    <div class="title">
    <h1 class="high_text">Тон</h1>
</div>
<div class="text">
    <p>Вокальный кружок МКОУ БОГАНСКОЙ СОШ</p>
</div>
</section>
<div class="container">
    <section class="serve">
    <h1 class="text-center mt-5">Вокальный кружок "ТОН"</h1>
    <h1 class="text-center mt-5">Наши услуги</h1>
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
    <h1 class="my-5 text-center">Галерея</h1>
    <div class="gallery">
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        <div class="gallery_item">
            <div class="gallery_title">Photo</div>
            <img src="The1975.jpg" alt="img" class="gallery_image">
            <div class="gallery_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure harum atque possimus minus consectetur delectus, asperiores libero in laudantium nisi officiis corrupti, ratione, fugiat impedit mollitia consequatur odio tenetur. Sapiente.
            </div>
        </div>
        
        <h1 class="text-center">Последние новости</h1>
        <div class="news">
                <?php
                require_once('apanel/connect.php');
                $news = mysqli_query($link,"SELECT * FROM `news`");
                $news = mysqli_fetch_all($news);
                foreach($news as $news){
                ?>
            <div class="new">
                <div class="ntitle"><h4><?=$news[1]?></h4>
                    <div class="nimage">
                        <img src="<?=$news[4]?>" class="nimage" alt="news">
                        <div class="ntext">
                            <p><?=$news[2]?></p>
                            <div class="ndate">
                                <p><?=$news[3]?></p></div>
                                <a href="" class="like">Понравилось</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
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