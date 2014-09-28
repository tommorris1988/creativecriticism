<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>
    
    <div class="row-fluid">
    	<div class="span12">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entry intro">
            	<h5 class="title">We handle bookings for these artists.</h5>
                <?php the_content(__('(more...)')); ?>
        	</div>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            
            <?php endif; ?>
        </div>
    </div>
    <div id="extra-wide" class="row-fluid">
        <div class="span12" style="width:102%;position:relative;left:-1%;">
			<?php query_posts(array('post_type'=> 'artists', 'order'=>'ASC'  ));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div class="artist"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?><div class="caption"><?php the_title(); ?></div></a></div>
            
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; wp_reset_query(); ?>

		</div>
    </div>


<?php get_footer(); ?>
