<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<!-- Форма отправки почты -->
<div class="forma">
<img id="emailform" src="<?php echo get_template_directory_uri();?>/img/vopros.png">
<div class="semdmail">
	<form id="form"> 
<img id="close" src="<?php echo get_template_directory_uri();?>/img/close.png">
	<p>Отправить письмо</p><br/>
		<div class="formblock">
			<label for="name">Ваше имя:</label>
			<input type="text" name="name"  placeholder="Имя" required>
		</div>
		<div class="formblock">
			<label for="mail">Ваша почта:</label>
			<input type="email" name="mail" required placeholder="Почта">
			<input type="hidden" name="action" value="my_mail" />
		</div>
		<textarea name="textarea" cols="40" rows="10" maxlength="1500" placeholder="Задать вопрос" ></textarea>
		<br/>
		<br/>
		<button>Отправить</button>
	</form>
	
</div>

</div>

<div class="kontackt">
	<img id="konimg" src="<?php echo get_template_directory_uri();?>/img/contakt.png">
	<img id="close2" src="<?php echo get_template_directory_uri();?>/img/close.png">
	<ul>
	<p>соцсети</p>
	<li><a href="http://vk.com/id24463375" target="_blank" id="vk"><i class="fa fa-vk fa-2x"></i> </a></li>
	<li><a href="http://vk.com/id24463375" target="_blank" id="fecbook"><i class="fa fa-facebook-official fa-2x"></i> </a></li>
	<li><a href="http://ok.ru/profile/577599209772"  id="ok" target="_blank" id="ok"><i class="fa fa-odnoklassniki fa-2x fa-spin "></i></a></li>
	<br/>
	<li><i class="fa fa-phone">+380997599394</i>
	<br>
	<i class="fa fa-phone">+380997599394</i>
	</li>
	</ul>
</div>

