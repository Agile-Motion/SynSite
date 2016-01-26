<?php
if ( comments_open() || have_comments() ) {
	?>
	<aside class="comments">
		<?php comment_form(); ?>
		<ul class="comments-list">
			<?php wp_list_comments( array(
				'depth'       => 5,
				'avatar_size' => 100,
			) ); ?>
		</ul>
		<div class="paginate-comments">
			<?php paginate_comments_links(); ?>
		</div>
	</aside>
	<?php
}