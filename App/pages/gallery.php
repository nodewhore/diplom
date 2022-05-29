<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
    <link rel="stylesheet" href="App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<?php
require ('require/preloader.html');
require ('require/nav.html');
require ('require/modals.html');

?>
<div class="container mt-5">
<h1 class="text-center mt-5">Галерея</h1>
<h1>Дипломы</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
        <?php
        
require_once ('apanel/connect.php');
$galleryItem = $link->query("SELECT * FROM `gallery` WHERE `category` = '1'");
$galleryItem = mysqli_fetch_all($galleryItem);
foreach($galleryItem as $galleryItem){
    ?>
          <div class="card shadow-sm" style = "border:none;">

            <img src="<?=$galleryItem[2]?>" width="100%" height="400px" alt="gallery">
            <div class="card-body" style="background-color:#000; border:none;">
              <p class="card-text"><?=$galleryItem[1]?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" ><a href="<?=$galleryItem[2]?> " style = "text-decoration:none; color:#fff;">Посмотреть</a></button>
                                </div>
              </div>
            </div>
            <?php
}
?>
          </div>
        </div>



   </div>


   <h1 class="mt-5">Фотографии</h1>
   <?php
require_once ('apanel/connect.php');
$galleryItem = $link->query("SELECT * FROM `gallery` WHERE `category` = '2'");
$galleryItem = mysqli_fetch_all($galleryItem);
foreach($galleryItem as $galleryItem){
    ?>
       <div class="gallery-item">
           <div class="gallery-text">
               <p><?=$galleryItem[1]?></p>
               <div class="gallery-image">
                   <img src="<?=$galleryItem[2]?>" class="gallery-image" alt="gallery">
               </div>
           </div>
       </div>
<?php
}

?>
</div>
<?php
require('require/footer.html');
?>
<script src="main.js"></script>
</body>
</html>