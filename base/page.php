<?php
function get_post_by_id($post_id){
        global $link;
        $sql = "SELECT * FROM products WHERE id = " .$post_id;

        $result = mysqli_query($link, $sql);
        $posts = mysqli_fetch_array($result);
        
        return $posts;
      }
        ?>