<?php
session_start();
$user_id=$_SESSION['user']['id'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<?php
require ('require/nav.html');
require('require/modals.html');
require('require/preloader.html');
?>
        <div class="container">
            <h1 class="text-center mt-5 mb-5">Новости</h1>
            <div class="row">
                <?php
                require_once('apanel/connect.php');
                $news = mysqli_query($link,"SELECT * FROM `news`");
                $news = mysqli_fetch_all($news);
                foreach($news as $news){
                ?>
            <div class="new">
            <div class="card mt-5">
                
            <img src="<?=$news[4]?>" class="nimage" alt="news">
    <div class="card__content">
    <h4 class="mb-5 text-center"><?=$news[1]?>

    <div class="ntext">
    <p><?=$news[2]?></p>
    <?php
         $countLike=$link->query("SELECT count(*) FROM `likes` WHERE `post_id`='$news[0]'");
         $countLike=mysqli_fetch_all($countLike);
         foreach($countLike as $countLike){
         }

    ?>
<div class="ndate">
    <p style="float:left;"><?=$news[3]?></p></div>
    <p style="float:right;"><?=$countLike[0]?><a href="/like?id=<?=$user_id?>&post=<?=$news[0]?>" class="like" > Понравилось</a></p>
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