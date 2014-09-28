<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>
				<h3 id="title" class="entry-title"><?php the_title(); ?></h3>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	
                <div class="post">
                
                <?php the_post_thumbnail('large',array('class'=>'hero')); ?>
                
                <div class="entry">
                    
                    <h3 class="entry-title"><?php the_title(); ?></h3>
                    
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
                </div>
            
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                

		</div>
        
        <div class="span2 column links-column">
        	<div class="nav links">
        	<?php if(get_field('links')): ?>
                <ul>
                <?php while(has_sub_field('links')): ?>
             
                    <li><a href="<?php the_sub_field('address'); ?>" target="_blank"><?php the_sub_field('label'); ?></a></li>
             
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        	</div>
            <div class="border"></div>
        </div>
    </div><!-- row-fluid -->
    
    <div class="arrow-left">
		<?php next_post_link('%link'); ?>
    </div>
    <ul class="sidebar left">
        <span>Posts</span>    
		<?php query_posts(array('post_type'=> 'post', 'order'=>'ASC', 'posts_per_page' => 5 ));
		if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<li>
            	<div class="peek">
					<?php the_post_thumbnail('thumbnail'); ?>
                    <div class="arrow-grey"></div>
            		<div class="arrow-white"></div>
                </div>
                <a href="<?php the_permalink(); ?>">
					<?php the_time('d F'); ?>
                </a>
            </li>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
 	</ul>
    <div class="arrow-right">
    	<?php previous_post_link('%link'); ?>
    </div>
    
</div><!-- #grid -->

<?php $images = get_field('gallery');
if( $images ): ?>
<div id="slideshow">
<div id="clicker"></div>
    
    <div  class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
<?php endif; ?>

<?php get_footer(); ?>
