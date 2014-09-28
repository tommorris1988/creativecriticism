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
            	<h5 class="title">These are the events we have coming up.</h5>
                <?php the_content(__('(more...)')); ?>
        	</div>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            
            <?php endif; ?>
        </div>
    </div>
    <div id="extra-wide" class="row-fluid">
        <div class="span12" style="width:102%;position:relative;left:-1%;">
			<?php query_posts(array('post_type'=> 'events', 'order'=>'ASC','post_status'=>'future' ));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div class="event">
                	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?>
                    <div class="caption">
                    	<div id="horizon">
                    	<div class="outer-element">
                        	<div class="inner-element">
                                <h4 class="title"><?php the_title();?></h4>
                                <p><?php the_field('venue'); ?><br />—<br /><?php the_time('F j, Y'); ?> at <?php the_time('g a'); ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
    				</a>
                </div>
            
            <?php endwhile; else: ?>
            	<h4 class="title"><?php _e('There are no events coming up.'); ?></h4>
            <?php endif; wp_reset_query(); ?>

		</div>
    </div>
    <div id="extra-wide" class="row-fluid">
        <div class="span12" style="width:102%;position:relative;left:-1%;">
        
        	
			<?php query_posts(array('post_type'=> 'events','post_status'=>'publish' ));
            if (have_posts()) : ?>
            <div class="entry intro">
            	<h5 class="title">Past Events.</h5>
        	</div>
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="event">
                	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?>
                    <div class="caption">
                    	<div id="horizon">
                    	<div class="outer-element">
                        	<div class="inner-element">
                                <h4 class="title"><?php the_title();?></h4>
                                <p><?php the_field('venue'); ?><br />—<br /><?php the_time('F j, Y'); ?> at <?php the_time('g a'); ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
    				</a>
                </div>
            
            <?php endwhile; else: ?>
            	<h4 class="title"><?php _e('There are no futureboogie past events.'); ?></h4>
            <?php endif; wp_reset_query(); ?>

		</div>
    </div>


<?php get_footer(); ?>
