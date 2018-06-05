<?php
//Шапка  
get_header();
//Контент
echo "<section>";
echo "<div class = 'container'>";
echo "<h2 class='delivery-title'>Интересное</h2>";

query_posts('cat=4'); // идентификатор рубрики.
while (have_posts()) : the_post();
    echo "<div class='exciting-item'>";
    
    //в этой строке выводится название статьи и ссылка на неё
    echo "<a href='" . get_the_permalink() . "' class='exciting-item-link'>" . get_the_title() . "</a>";
    //здесь выводится миниатюра записи
    //echo "<div class='exciting-item-image'>" . get_the_post_thumbnail() . "</div>";
    echo "<img src='".get_the_post_thumbnail_url()."' class='exciting-item-image' />";
    echo "<p class='exciting-item-text'>" . get_the_excerpt() . "</p>"; // вывод текста записи
    echo "</div>";
endwhile;
wp_reset_query();
echo "</div>";
echo "</section>";
//Подвал
get_footer(); 
?>
