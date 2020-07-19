<?php
$link = mysqli_connect($host = 'localhost', $user = 'admin', $password = '123', $database = 'db-shop');
if(mysqli_connect_errno())
{
        echo 'Ошибка к подключению к БД';
        exit();
}

?>