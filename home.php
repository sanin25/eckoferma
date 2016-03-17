<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
get_header(); // Подключаем хедер?> 
<div class="container cont1 clearfix">
	<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Эко ферма" id="logo">
</div>
<div class="container cont2 clearfix">
	<?php get_template_part('inc/about');?>
</div>
<div class="container cont3 clearfix">
	<?php get_template_part('inc/katalog');?>
</div>
<div class="container cont4 clearfix">
	<?php get_template_part('inc/gusi');?>
</div>

<div class="container cont5 clearfix">
	<?php get_template_part('inc/pavlin');?>
</div>
<div class="container cont6 clearfix">
<?php get_template_part('inc/kyri');?>
</div>
<?php get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>