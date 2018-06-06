<?php
get_header(); 
 
//Шапка  
get_header();
//Контент
echo "<section>";
echo "<div class = 'container'>";

    while ( have_posts() ) : the_post();
        //get_template_part( 'content', get_post_format() );
        echo "<h1>".get_the_title()."</h1>";
        echo "<div class='exciting-item-post'>";
        echo "<img src='".get_the_post_thumbnail_url()."' class='exciting-item-image-post' />";
        echo "<div class='exciting-item-text-post'>".get_the_content()."</div>";
    endwhile;
echo "</div>";

 //Подвал
echo "</div>";
echo "</section>";
get_footer(); 
?>