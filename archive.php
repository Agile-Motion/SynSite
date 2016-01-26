<?php
get_header();
if ( ! have_posts() ) {
	?>
	<div class="empty-category">
		<header><h1 class="entry-title"><?php _e( 'No posts', 'synsite' ); ?></h1></header>

		<div class="entry-content">
			<?php _e( 'No posts here, sorry. Maybe you can use the search feature ?', 'synsite' ); ?>
		</div>
	</div>
	<?php
} else {
	while ( have_posts() ) {
		the_post();
		?>
		<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header><h1 class="entry-title"><?php the_title(); ?></h1></header>

			<div class="entry-excerpt"><?php the_excerpt(); ?></div>
		</a>
		<?php
	}
	echo paginate_links();
}
get_footer();