<!-- Row End -->
</div><!-- Container End -->


<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-4 columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    <?php endif; ?> 
		</div>
		<div class="large-4 columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    <?php endif; ?> 
		</div>
		<div class="large-4 columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    <?php endif; ?> 
		</div>
	</div>
	<div class="row license">
		<div class="large-12 columns">
			<p>This work is licensed under a Creative Commons Attribution 4.0 International License.<br>
			Powered by WordPress, Reverie, and Foundation.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>