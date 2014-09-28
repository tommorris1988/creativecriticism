<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

				<h4 class="author">Recent Articles</h4>
                            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="post">
                
                <div class="author-divide"></div>
                
                <?php the_post_thumbnail('medium',array('class'=>'half')); ?>
                
                <div class="entry">
                    
                    <h3><?php the_title();?></h3>
                    
                    <?php the_excerpt(__('(more...)')); ?>
                    
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
                </div>
            
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                

		</div>
        
        <div class="span2 column border-right">
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
    </div><!-- row-fluid -->
</div><!-- #grid -->

<?php get_footer(); ?>
