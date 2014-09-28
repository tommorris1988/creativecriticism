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
            	<h5 class="title"><?php the_content(__('(more...)')); ?></h5>
                
        	</div>
            <?php endwhile; else: ?>
            	<h4 class="title"><?php _e('There are no On The Road events coming up.'); ?></h4>
            <?php endif; ?>
        </div>
    </div>
    <div id="extra-wide" class="row-fluid">
        <div class="span12" style="width:102%;position:relative;left:-1%;">
        	
            <?php if (get_field('on_the_road')) : ?>
            <?php while(has_sub_field('on_the_road')): ?>
            	<div class="span4 entry">
                	<h5 class="divide"><?php the_sub_field('month'); ?></h5>
                    <?php the_sub_field('events'); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

		</div>
    </div>


<?php get_footer(); ?>