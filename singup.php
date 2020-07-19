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
 if(isset($data['do_signup']))
{
    // здесь регистрируем

    $error =array();
    if(trim($data['login']) == '')
    {
        $error[] = '<center>Введите логин!</center>';
    }
    if(trim($data['email']) == '')
    {
        $error[] = '<center>Введите Email!</center>';
    }
    if(trim($data['password']) == '')
    {
        $error[] = '<center>Введите пароль!</center>';
    }
    if(trim($data['password_2']) == '')
    {
        $error[] = '<center>Пароли не совпадают!</center>';
    }
    if(R::count('users', "login = ?" , array($data['login']))
    > 0)
    {
        $error[] = '<center>Пользовотель с таким логином уже существует!</center>';
    }
    if(R::count('users', "email = ?" , array($data['email']))
    > 0)
    {
        $error[] = '<center>Пользовотель с таким Email уже существует!</center>';
    }
    if(empty($error))
    {
        //Можно регистрировать
        $user = R::dispense('users');
        $user ->login = $data['login'];
        $user ->email = $data['email'];
        $user ->password = password_hash($data['password'],PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color: green;"><center>Вы успешно зарегистрированы</center></div><hr>';
        header('Location:.');
    }else
    {
        echo '<div style="color: red;">'.array_shift($error).'</div><hr>';
    }

}
?>
<div class="main bg-primary">
        <div class="main__container d-flex flex-column justify-content-around p-5">
          <div class="main__title container text-white">
            <h3>Введите ваши данные!</h3>
            
            <form class="form" action="singup.php" method="POST">
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="input"> </label>
                  <input class="form-control" type="text" id="input" name="login" value="<?php echo @$data['login']; ?>"/>
                </div>
                <div class="form-group col-6">
                  <label for="inputEmail4"> </label>
                  <input class="form-control" type="email" id="inputEmail4" name="email" value="<?php echo @$data['email']; ?>" placeholder="Your Email ..."/>
                </div>
              </div>
              <div class="form-grup">
              <input  class="form-control"  type="password" name="password">
              <br>
              <input  class="form-control"  type="password" name="password_2">
              <br>
              <button class="btn nav-link text-white border border-white w-25 rounded-pill container" type="submit" name="do_signup">Сохранить</button>
                <!-- <textarea class="form-control mb-4" placeholder="Your Message ..." rows="8"></textarea><a class="nav-link text-white border border-white w-25 rounded-pill container" href="#">Submit</a> -->
              </div>
            </form>
          </div>
        </div>
      </div>
      </body>
</html>