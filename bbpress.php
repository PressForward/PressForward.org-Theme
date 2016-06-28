<?php
/*
Default Template For bbPress
*/
get_header(); ?>

<!-- Row for main content area -->
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="row">
			<div class="small-12 large-12 columns" role = "main">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			</div>
			</div>
			<div class="row">
			<div class="small-12 large-8 columns" role="main">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			</div>
	<div class="small-12 large-4 columns BBpressSidebar" role="main">	
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('BBSidebar')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    <?php endif; ?>  
	</div>	    
	</div>
		</article>
	<?php endwhile; // End the loop ?>

	
<?php get_footer(); ?>