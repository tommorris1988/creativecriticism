<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>


	<?php if (get_field('features')) { ?>	
    <div id="features-gallery" class="flexslider">
        
        <ul class="slides">
		<?php while(has_sub_field('features')): ?>
        <?php $slide = get_sub_field('feature_image');
			$post_objects = get_sub_field('feature_link'); ?>
            <li>
            <?php if($post_objects) { ?>
            <a href="<?php echo $post_objects; ?>">
			<?php } ?><img class="slide" src="<?php echo $slide['sizes']['slideshow']; ?>" title="<?php the_sub_field('feature_caption'); ?>" alt="<?php $slide['alt']; ?>" /><h3 class="caption appear"><?php the_sub_field('feature_caption'); ?></h3><?php if($post_objects) { echo '</a>'; } ?>
            </li>
		<?php endwhile; ?>
    	</ul>
        
    </div>
    <?php } ?>
    
    
    <div class="row-fluid">
            <div id="agency" class="span3 green block">
                <h4 class="divide"><a href="<?php echo get_permalink('5'); ?>">Agency</a></h4>
                <h6>We take care of these artists...</h6>
                <ul>
            <?php query_posts(array('post_type'=> 'artists', 'order'=>'ASC','posts_per_page'=> 5  ));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more" href="<?php echo get_permalink('5'); ?>">More</a>
            </div>
                
            <div class="span3 blue block">
            	<h4 class="divide"><a href="<?php echo get_permalink('7'); ?>">Management</a></h4>
                <h6>We manage these guys...</h6>
                <ul>
					<?php query_posts(array('post_type'=> 'clients', 'order'=>'ASC','posts_per_page'=> 5  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more" href="<?php echo get_permalink('7'); ?>">More</a>
            </div>
            
            <div class="span3 teal block">
            	<h4 class="divide"><a href="<?php echo get_permalink('6'); ?>">Label</a></h4>
                <h6>Latest releases...</h6>
                <ul>
					<?php query_posts(array('post_type'=> 'releases', 'order'=>'ASC','posts_per_page'=> 5  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more" href="<?php echo get_permalink('11'); ?>">More</a>
            </div>
            
            
            <div class="span3 purple block">
            	<h4 class="divide"><a href="<?php echo get_permalink('8'); ?>">On The Road</a></h4>
                <h6>January Events</h6>
                <ul>
					<?php query_posts(array('post_type'=> 'events', 'order'=>'ASC','posts_per_page'=> 5  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_date(); ?> / <?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more" href="<?php echo get_permalink('8'); ?>">More</a>
            </div>
        
    </div>
        
    <div class="row-fluid">
        <div class="span12">
        	<div class="row-fluid">
            
                <div class="span4 pink block">
                    <h4 class="divide">Featured Events</h4>
                </div>
                
                <div class="span4 block">
                    <h4 class="divide">Mixes</h4>
					<?php query_posts(array('post_type'=> 'mixes', 'posts_per_page'=> 1  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail('wide'); ?>
                    <h6><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
                    <?php the_excerpt(); 
					$links = get_field('media');
					$first_row = $links[0];
					$first_row_link = $first_row['link'];
					$height = 100;
					media_embed($first_row_link, 300, $height); ?>
                    
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </div>
                
                <div class="span4 grey">
                
                    <div class="row-fluid">
                    
                        <div>
                            <h4 class="divide">Twitter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum arcu metus, porttitor id imperdiet sit amet, iaculis eget sapien. Quisque. </p>
                            <a class="more" href="http://www.twitter.com">More</a>
                        </div>
                        
                        <div>
                            <h4 class="divide">Subscribe</h4>
                            <p>Sign up here to receive news and updates on all runnings for the agency, management, label and events. We don't share. We don't spam. We're always interesting.</p>
                            <?php $args = array(
								'prepend' => '', 
								'showname' => false,
								'emailtxt' => '',
								'emailholder' => 'Enter your email address', 
								'showsubmit' => true, 
								'submittxt' => 'Send', 
								'jsthanks' => false,
								'thankyou' => 'Thank you for subscribing to our mailing list'
								);
								echo smlsubform($args);?>
                        </div>
                    
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
	
	
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="entry">
    	<?php the_content(__('(more...)')); ?>
    </div>  

	<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>



<ul class="sidebar">
	<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
</ul>


<?php get_footer(); ?>
