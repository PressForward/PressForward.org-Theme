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
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	</div> <!--closes row???-->
	 <div class="row" id="content-areas" data-equalizer>
		<!-- <div class="large-4 small-12 columns featured_area left" role="main" data-equalizer-watch>
			<h4>Using PressForward</h4>
			<//?php  $query = new WP_Query( 'cat=28&posts_per_page=1' ); ?>
				 <//?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				 <//?php the_content(); ?>
				 <//?php endwhile;
				 wp_reset_postdata();
				 else : ?>
				 <p><//?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				 <//?php endif; ?>

	  	</div>-->
  		<div class="large-6 small-12 columns featured_area left" role="main" data-equalizer-watch>
  				<h4>Pilot Partners</h4>
			<?php $query = new WP_Query( 'cat=29&posts_per_page=1' ); ?>
				 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				 <?php the_content(); ?>
				 <?php endwhile;
				 wp_reset_postdata();
				 else : ?>
				 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				 <?php endif; ?>
  		</div>
  		<div class="large-6 small-12 columns featured_area right" role="main" data-equalizer-watch>
  				<h4>News</h4>
  				<?php $query = new WP_Query( 'cat=-25,-28,-29&posts_per_page=5' ); ?>
				 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				 <div class="latestpost">

				 <!-- Display the Title as a link to the Post's permalink. -->
				 <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>

				 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				 <p><?php the_time( 'F jS, Y' ); ?></p>
				 </div> <!-- closes the first div box -->

				 <?php endwhile;
				 wp_reset_postdata();
				 else : ?>
				 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				 <?php endif; ?>
  		</div>
	</div>
<?php get_footer(); ?>
