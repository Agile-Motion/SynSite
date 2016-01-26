<?php

if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

function synsite_wp_head_viewport() { ?>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'/>
	<?php
}

add_action( 'wp_head', 'synsite_wp_head_viewport' );

function synsite_scripts() {
	wp_enqueue_script( 'synsite', get_stylesheet_directory_uri() . '/scripts/script.js', array(
		'jquery',
	), false, true );
	wp_enqueue_style( 'synsite', get_stylesheet_uri() );
	wp_enqueue_style( 'dashicons' );
}

add_action( 'wp_enqueue_scripts', 'synsite_scripts' );

function synsite_register_menus() {
	register_nav_menus( array(
		'header' => __( 'Header', 'synsite' ),
		'social' => __( 'Footer', 'synsite' ),
	) );
}

add_action( 'after_setup_theme', 'synsite_register_menus' );

function synsite_load_domain() {
	load_theme_textdomain( 'synsite', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'synsite_load_domain' );

function synsite_supports() {
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background', array(
		'default-color' => 'FFFFFF',
		'default-image' => false,
	) );
}

add_action( 'after_setup_theme', 'synsite_supports' );

function synsite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'synsite' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages, in the footer.', 'synsite' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'synsite_widgets_init' );

function synsite_add_editor_styles() {
	add_editor_style();
}

add_action( 'admin_init', 'synsite_add_editor_styles' );

function synsite_wp_footer() {
	?>
	<footer class="footer">
		<ul class="sidebar">
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
				<li>
					<?php
					if ( has_nav_menu( 'social' ) ) {
						?>
						<h2 class="widgettitle">
							<?php _e( 'Find us', 'synsite' ); ?>
						</h2>
						<div class="textwidget"><?php
							wp_nav_menu( array(
								'depth'          => 1,
								'container'      => 'nav',
								'fallback_cb'    => false,
								'theme_location' => 'social',
							) );
							?>
						</div>
						<?php
					}
					?>
				</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>
	</footer>
	<?php
}

add_action( 'wp_footer', 'synsite_wp_footer' );