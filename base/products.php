<?php
      function get_products($link){
        $sql = "SELECT * FROM products WHERE brand='iphone'";
        $result = mysqli_query($link, $sql);
        $products = mysqli_fetch_all($result, 1);
        return $products;
      }
      $products = get_products($link);

      function get_posts(){
        global $link;

        $sql = "SELECT * FROM products";

        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_all($result, 1);
        return $posts;

      }

      function get_post_by_id($post_id){
        global $link;
        // $post_id = ['post_id'];
        $result = mysqli_query($link, "SELECT * FROM `products` WHERE id ='$post_id'");
        $post = mysqli_fetch_assoc($result);
        
        return $post;
      }

      // function search($link){
      // if(isset($_POST['submit'])){
      //   $search = $_POST['search'];
      //   $query =mysqli_query();
      
      
      // }
     
        ?>