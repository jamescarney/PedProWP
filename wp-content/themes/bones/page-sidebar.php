<?php get_header(); ?>
	

	<div class="wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

		<?php get_content(); ?>
		<?php get_sidebar(); ?>


		<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	</div>
	




<?php get_footer(); ?>