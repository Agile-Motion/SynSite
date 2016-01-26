<?php
get_header();
while ( have_posts() ) {
	the_post();
	?>
	<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header><h1 class="entry-title"><?php the_title(); ?></h1></header>

		<div class="entry-excerpt"><?php the_excerpt(); ?></div>
	</a>
	<?php
}
?>
	<div class="paginate">
		<div class="paginate-previous">
			<?php previous_posts_link( __( 'Previous', 'synsite' ) ); ?>
		</div>
		<div class="paginate-next">
			<?php next_posts_link( __( 'Next', 'synsite' ) ); ?>
		</div>
		<div class="clear"></div>
	</div>
<?php
get_footer();