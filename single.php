<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
get_header(); // Подключаем хедер?> 
<section class="singl">
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
<div class="wrapper">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
<h1><?php the_title(); // Заголовок ?></h1>

<?php

$sub = $post->post_content;
$pattern = "/^\[.*?\] (\D+)/";

  preg_match_all($pattern, $sub, $mat,PREG_PATTERN_ORDER);
  var_dump($mat);
  
  echo do_shortcode($mat[0][0]);
   
    
 ?>
<div class="first_block">
    <span class="myimage"><?php
    /* $textonly;
     $pattern = '/(^\[gallery .*?\])/';
     $replacement = "";
    echo preg_replace($pattern, $replacement, $textonly);
    echo preg_replace($pattern, $replacement, $textonly);

    foreach($matches[0] as $key){
    	echo $key;
    }*/
       
    ?>
    </span>
    

</div>

<?php the_tags( 'Тэги: ', ' | ', '' ); // Выводим тэги(метки) поста ?>
<?php endwhile; // Конец цикла ?>
<?php comments_template( '', true ); // Комментарии ?>
</div>
</section>
<?php get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>