<?php get_header(); ?>
	<div id="post-error-404" class="post-error hentry">
		<header><h1 class="entry-title"><?php _e( 'Nothing found', 'synsite' ); ?></h1></header>
		<div class="thumbnail"><?php the_post_thumbnail(); ?></div>
		<div class="entry-content">
			<?php
			_e( 'Sorry, nothing here. Try the search feature.', 'synsite' );
			get_search_form();
			?>
		</div>
	</div>
<?php
get_footer();