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
<?php
require "db.php";

$data = $_POST;
if(isset($data['do_login']))
{
    $error = array();
    $user = R::findOne('users', 'login = ?', array($data['login']) );
    if($user)
    {
        //Логин существует
        if(password_verify($data['password'], $user->password))
        {
            //все хорошо
            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green;"><center>Вы вошли, можете перейти на главную страницу<br>
            <a href="Log.php">Главная</a></center></div><hr>';
        }else
        {
            $error[] = 'Неверный пароль!';
        }
    }else
    {
            $error[] = 'Пользователь не найден!';
        }

    
    if(empty($error))
    {
        echo '<div style="color: red;">'.array_shift($error).'</div><hr>';
    }
}
?>
<div class="main bg-primary">
        <div class="main__container d-flex flex-column justify-content-around p-5">
          <div class="main__title container text-white">
            <h3>Авторизация</h3>
            <p>Для того что бы авторизоваться пишите свои данный</p>
            <form class="form" action="login.php" method="POST">
                <div class="form-group ">
                  <label for="input"> </label>
                  <input class="form-control  " type="text" id="input" name="login" value="<?php echo @$data['login']; ?>"/>
                </div>
              <div class="form-grup">
              <input  class="form-control mb-4"  type="password" name="password">
              <button class="btn btn-success bg-primary nav-link text-white border border-white w-25 rounded-pill container"type="submit" name="do_login">Сохранить</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
      </body>
</html>