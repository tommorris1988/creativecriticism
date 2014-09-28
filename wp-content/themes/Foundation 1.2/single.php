<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	
                <h3 class="entry-title"><?php the_title(); ?></h3>
                
                <div class="author-divide"></div>
                <h4 class="author">By <?php the_author(); ?></h4>
                
                <?php the_post_thumbnail('large',array('class'=>'hero')); ?>
                
                <div class="entry">
                    
                    <h2><?php the_title();?></h2>
                    
                    <?php the_content(__('(more...)')); ?>
                    
                    <?php if (get_field('media')) {
                        echo '<ul class="media">';
                        while (has_sub_field('media')) {
                            echo '<li>';
                            $mix_link = get_sub_field('link');
                            echo do_shortcode('[media link="'.$mix_link.'" width="100%"]');
                            echo '</li>';
                            }
                        echo '</ul>';
                        }
                    ?>
                    
                </div>  
            
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                

		</div>
        
        <div class="span2 column">
        	<div class="nav links">
        	<?php if(get_field('links')): ?>
                <ul>
                <?php while(has_sub_field('links')): ?>
             
                    <li><a href="<?php the_sub_field('address'); ?>" target="_blank"><?php the_sub_field('label'); ?></a></li>
             
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        	</div>
        </div>
        <div class="span1 column">
        	<div class="border" style="margin-left:-2.5641%;"></div>
        </div>
    </div><!-- row-fluid -->
</div><!-- #grid -->

<?php get_footer(); ?>
