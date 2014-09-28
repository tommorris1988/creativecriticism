<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<div class="left-small border-right">
	<div class="arrow-left">
		<?php next_post_link('%link'); ?>
    </div>
</div>

<div class="left-sidebar border-right">
    <?php wp_nav_menu( array('menu' => 'Main','menu_class'=>'nav','container'=>'' )); ?>
    <ul class="social">
    	<li>SHARE +</li>
    	<li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">Twitter</a></li>
        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a></li>
    </ul>
</div>

<div id="content">

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
    </div><!-- Post -->
    
	<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
                

</div><!-- Content -->
        
<div class="right-sidebar border-left border-right">
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

<div class="right-small">
	<div class="arrow-right">
		<?php previous_post_link('%link'); ?>
    </div>
    <ul class="related">
        <span>Posts</span>    
		<?php query_posts(array('post_type'=> 'post', 'order'=>'ASC', 'posts_per_page' => 5 ));
		if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<li>
            	<div class="peek">
					<?php the_post_thumbnail('medium'); ?>
                    <div class="arrow-grey"></div>
            		<div class="arrow-white"></div>
                </div>
                <a href="<?php the_permalink(); ?>">»</a>
            </li>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; wp_reset_query(); ?>
 	</ul>
</div>


<?php $images = get_field('gallery');
if( $images ): ?>
<div id="slideshow">
<div id="clicker"></div>
    
    <div id="slider" class="flexslider">
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
