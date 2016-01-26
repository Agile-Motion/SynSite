<?php
get_header();
the_post();
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header><h1 class="entry-title"><?php the_title(); ?></h1></header>
		<div class="thumbnail"><?php the_post_thumbnail(); ?></div>
		<div class="entry-content"><?php the_content(); ?></div>
		<nav class="paginate">
			<?php wp_link_pages(); ?>
		</nav>
		<aside class="categories">
			<?php
			the_category();
			the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' );
			?>
			<div class="clear"></div>
		</aside>
		<?php comments_template(); ?>
	</div>
<?php get_footer();