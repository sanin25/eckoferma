<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
get_header(); // Подключаем хедер?> 
<section class="cont1 clearfix">
	<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Эко ферма" id="logo">
</section>
<section class="cont2 clearfix">
	<?php get_template_part('inc/about');?>
</section>
<section class="cont3 clearfix">
	<?php get_template_part('inc/katalog');?>
</section>
<section class="cont4 clearfix">
	<?php get_template_part('inc/gusi');?>
</section>

<section class="cont5 clearfix">
	<?php get_template_part('inc/pavlin');?>
</section>
<section class="cont6 clearfix">
<?php get_template_part('inc/kyri');?>
</section>
<?php get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>