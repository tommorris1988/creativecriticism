<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<style type="text/css">
#artist-<?php the_id(); ?> a { color:rgb(219,123,190); }
</style>

<div class="row-fluid">

    <div class="span2 sidebar">
        <ul>
        	<h4 class="title" style="margin-top:0;">Events</h4>
        <?php query_posts(array('post_type'=> 'post', 'order'=>'ASC' ));
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <li id="artist-<?php the_id(); ?>"><a href="<?php the_permalink();?>"><?php the_date();?><br /><?php the_title(); ?> at <?php the_field('venue'); ?></a></li>
        
        <?php endwhile; else: ?>
        <li><?php _e('Sorry, no posts matched your criteria.'); ?></li>
        <?php endif; wp_reset_query(); ?>
        </ul>
    </div>
        
        
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="entry span8">
    	
        <div class="shadow">
        <?php the_post_thumbnail('large',array('class'=>'hero')); ?>
        </div>
        
        <div class="sharing">
            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
            <div class="tweet">
            <a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="futureboogie">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
        </div>
        
        <h2><?php the_title();?></h2>
        
    	<?php the_content(__('(more...)')); ?>
        
        <?php $media = get_field('media'); 
			
		?>
        
    </div>  

	<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    <div class="links span2">
        
        <ul>
        	<h6 class="more">Event Information</h6>
            <li><?php the_title();?> at <?php the_field('venue'); ?></li>
            <li><?php the_field('date');?></li>
            <li><?php the_field('doors');?></li>
            <li><?php the_field('extra');?></li>
        </ul>
        
    </div>
        
</div>



<?php get_footer(); ?>