<!-- Footer -->
<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
						<?php if( get_field('widget_1') ): ?>
    <?php the_field('widget_1'); ?>
<?php endif; ?>
						</section>

					

						<section>
							<h4>SEM TURPIS AMET SEMPER</h4>
							<ul class="alt">
		

					
<!-- // Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
 
<!-- // Start our WP Query -->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
<!-- //Display the Post Title with Hyperlink -->
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
 
<?php 
endwhile;
wp_reset_postdata();
?>
</ul>
								</a></li>
								
		
						</section>
						<?php
		
		// vars
		$social_mehedi = get_field('social_links');	
		if( $social_mehedi ): ?>
						<section>

							<h4><?php echo $social_mehedi['footer_right_title'];?></h4>
							<?php echo $social_mehedi['footer_right_content']; ?>
						</section>
						<?php endif; ?>
					</div>
					<div class="copyright">
					<?php if( get_field('copyright') ): ?>
    <?php the_field('copyright'); ?>
<?php endif; ?>
				
					</div>
				</div>
			</footer>
            <?php wp_footer();?>
	</body>
</html>
