<?php
      function get_products($link){
        $sql = "SELECT * FROM products WHERE brand='sony'";
        $result = mysqli_query($link, $sql);
        $products = mysqli_fetch_all($result, 1);
        return $products;
      }
      $products = get_products($link);
        ?>