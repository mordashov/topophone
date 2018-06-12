<?php 
//Шапка  
get_header();
//Контент
echo "<section>";
echo "<div class = 'container'>";
while( have_posts() ) : the_post();
    $more = 1; // отображаем полностью всё содержимое поста
	//the_title(); // эта функция выводит заголовок
	the_content(); // выводим контент
endwhile;
//Подвал
echo "</div>";
echo "</section>";
get_footer(); 
?>