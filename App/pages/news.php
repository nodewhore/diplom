<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
require ('require/nav.html');
?>
        <div class="container">
            <h1 class="text-center mt-5">Новости</h1>
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
    <?php
    
    require ('require/footer.html');
    ?>
    <script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<script src="App/js/main.js"></script>

</body>
</html>