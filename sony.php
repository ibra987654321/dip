<?php
require_once 'base/db.php';
require_once 'base/sonybd.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>work</title>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <div class="header">
      <div class="nav__common d-flex justify-content-between m-5">
        <nav class="nav"><img class="size" src="img/logo1.png" alt=""/></nav>
        <nav class="nav"><a class="nav-link text-body" href="index.html">Главный</a><a class="nav-link text-body" href="work.html">Каталог</a><a class="nav-link text-body" href="blog.html">Отзывы</a><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="log.php">Регистрация</a></nav>
      </div>
      <div class="section__bottom">
        <div class="section__container"><img class="w-100" src="img/bunner/sonybunner.jpg" alt=""/></div>
      </div>
    </div>
    <nav class="nav text-cenetr justify-content-center p-5"><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="iphone.php">Iphone</a><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="work.php">Samsung</a><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="xiaomi.php">Xiaomi</a><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="sony.php">Sony</a></nav>
    <div class="content container">
      <div class="row text-cenetr justify-content-center">
      <?php
      $products = get_products($link);
      ?>
      <?php if(count($products)=== 0): ?>
      <?php else: ?>
      <?php foreach($products as $product): ?>

        <div class="col-lg-3 pb-4"><img class="catalog" src="<?=$product ["photo"] ?>"/>
          <a href="#"><?=$product ["title"] ?>
          <br> 
          <h2 class="pl-5"><?=$product ["price"] ?></h2>
        </div></a>
      <?php endforeach; ?>
      <?php endif; ?>
       
      </div>
    </div>
    <div class="section__bottom bg-light">
      <div class="section__container d-flex flex-column justify-content-around p-5">
        <div class="section__footer">
          <div class="display-4 p-4">Если хочешь сделать покупку то нужно сделать регистарцию</div><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5 w-25 container" href="contact.html">Зарегистрироваться</a>
        </div>
      </div>
    </div>
    <div class="footer container d-flex justify-content-center m-5">
      <div class="footer__container">
        <nav class="nav"></nav>
        <nav class="nav"><a class="nav-link pr-0 pl-0 pb-3 text-body display-4" href="index.html">Al</a><span><a class="nav-link pl-0 pb-3 display-4" href="index.html">oo</a></span><a class="nav-link text-body" href="#">Наш чат</a><a class="nav-link text-body" href="#">Twitter</a><a class="nav-link text-body" href="#">FaceBook</a></nav>
      </div>
    </div>
  </body>
</html>