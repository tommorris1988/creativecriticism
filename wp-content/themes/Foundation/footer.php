<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
?>

<div class="footer container-fluid entry">
	<div class="row-fluid outer">
	
		<div class="span1"></div>
	
		<div class="span3 info">
			<a class="sub-head" href="<?php bloginfo('url'); ?>">Archive</a>
		</div>
		
		<div class="span6 archives">
			<ul>
			<?php 
			$args = array('post_type'=>'post','posts_per_page' => 20);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts()) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
			
				<li>
					<span class="month"><?php the_date('M');?></span>
					<a class="link" href="<?php the_permalink();?>"><?php the_time('d');?></a>
					<div class="cover container-fluid entry">
						<div class="row-fluid outer">
							<div class="span1"></div>
							<div class="span3 info">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="span6">
								<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
								<span class="date"><?php the_time('M Y');?></span>
							</div>
						</div>
					</div>
				</li>
		
			<?php endwhile; else: endif; ?>
			</ul>
		</div>

	</div>
</div>

<!--<div id="footer" class="container-fluid footer">
	<div class="row-fluid wrap">
    
        <div id="copyright" class="span3">© 2013 Futureboogie Ltd</div>
        
        <div id="address" class="span6">Suite 2, Studio 31 Berkeley Square, Bristol, BS8 1HP. <abbr title="Email" class="initialism">E:</abbr><a href="mailto:info@futureboogie.com"> info@futureboogie.com </a></div>
    
        <div id="build" class="span3">Site built by <a href="http://www.fiascodesign.co.uk" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fiascodesign.png" alt="Fiasco Design" /></a></div>
        
    </div>
</div>-->

<?php wp_footer(); ?>
</body>
</html>