<?php
	/* Template Name: Custom Home Page */
	get_header();
	?>

	<div class="small-12 large-12 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	</div> <!--closes row???-->
	<div class="row" id="content-areas">
		<div class="large-4 small-4 columns featured_area left" role="main">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_column')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    <?php endif; ?>  
	  	</div>
  		<div class="large-4 small-4 columns featured_area middle" role="main">

			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_column')) : else : ?>  
        		<p><strong>Widget Ready</strong></p>  
        		<p>This center_column is widget ready! Add one in the admin panel.</p>  
    		<?php endif; ?>  
  		</div>
  		<div class="large-4 small-4 columns featured_area right" role="main">

			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_column')) : else : ?>  
        		<p><strong>Widget Ready</strong></p>  
        		<p>This center_column is widget ready! Add one in the admin panel.</p>  
    		<?php endif; ?>  
  		</div>
	</div>
<?php get_footer(); ?>	

