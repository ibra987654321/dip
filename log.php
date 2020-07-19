<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Contact</title><link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  <div class="haeder">
      <div class="nav__common d-flex justify-content-between m-5">
        <nav class="nav"><a class="nav-link text-body" href="index.html"><img class="size" src="img/logo1.png" alt=""/></a></nav>
        <nav class="nav"><a class="nav-link text-body" href="index.html">Главный</a><a class="nav-link text-body" href="work.php">Каталог</a><a class="nav-link text-body" href="blog.html">Отзывы</a><a class="nav-link border btn btn-outline-primary rounded-pill border-primary text-bodyp-5" href="log.php">Регистрация</a></nav>
      </div>
<div class="main bg-primary">
        <div class="main__container d-flex flex-column justify-content-around p-5">
          <div class="main__title container text-white">
            <h3>Расскажите о себе!</h3>
            <p>Для того чтобы сделать покупку Вам нужно вести ваши данные. 
              <br>
            Хорошей покупки!!! </p>
                    <?php
        require "db.php";
        ?>
        <?php if(isset($_SESSION['logged_user']));?>
        Авторизован<br>
        <a href="logout.php" class="nav-link text-white border border-white w-25 btn btn-outline-primary rounded-pill container">Выйти</a>
        <hr>
        <a href="singup.php" class="nav-link text-white border border-white w-50 btn btn-outline-primary rounded-pill container">Регистрироваться</a><br>
        <a href="login.php" class="nav-link text-white border border-white w-50 btn btn-outline-primary rounded-pill container">Авторизоваться</a><br>
            
              </div>
            </form>
          </div>
        </div>
      </div>
      </body>
</html>