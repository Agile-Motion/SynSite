<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
	<header>
		<a href="<?php echo home_url(); ?>" class="infos">
			<h1 class="blogname"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="description"><?php bloginfo( 'description' ); ?></h2>
		</a>
	</header>
	<?php
	get_search_form();
	wp_nav_menu( array(
		'depth'          => 2,
		'container'      => 'nav',
		'fallback_cb'    => false,
		'theme_location' => 'header',
	) );
	?>
	<div class="clear"></div>
</div>
<div id="content">