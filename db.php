<?php
require "lips/rb.php";
R::setup( 'mysql:host=localhost; dbname=contact',
        'root', '' );

session_start();