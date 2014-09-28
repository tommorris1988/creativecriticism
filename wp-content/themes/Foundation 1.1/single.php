<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<div id="content" class="container-fluid" >
<div class="row-fluid">

<div class="offset3 span6">
        
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="shadow">
	<?php the_post_thumbnail('large',array('class'=>'hero')); ?>
    </div>
        
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
    
    <div class="links span2">
    
    	
        
        <ul>
        	<h6 class="more">Information</h6>
            <li><?php the_title();?> at <?php the_field('venue'); ?></li>
            <li><?php the_field('date');?></li>
            <li><?php the_field('doors');?></li>
            <li><?php the_field('extra');?></li>
        </ul>
        
    </div>
        
</div>

<?php get_footer(); ?>
