<?php

require_once 'base/db.php';
require_once 'base/products.php';

// $post_id = $_GET['$post_id'];
// if (!is_numeric($post_id)) exit();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>work</title>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  <div class="content container">
      <div class="row text-cenetr justify-content-center">
      <div class="col-lg-3 pb-4"><img class="catalog" src="<?=$_GET?>"/>
          <?php
          $post = get_post_by_id($link);
           echo '<pre>';
           print_r($post);
          ?>
        
        </div>

      </div>
    </div>
    </body>
</html>