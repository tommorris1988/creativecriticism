<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<div class="row-fluid">

    <div class="span2 sidebar">
    	<h4 class="title first">Mixes</h4>
        <div class="press"><h4 class="title"><span>View</span> Mixes<div class="down"></div></h4></div>
        <div class="artists-wrap">
            <ul>
            <?php query_posts(array('post_type'=> 'mixes', 'order'=>'ASC' ));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <li id="artist-<?php the_id(); ?>"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; else: ?>
            <li><?php _e('Sorry, no posts matched your criteria.'); ?></li>
            <?php endif; wp_reset_query(); ?>
            </ul>
        </div>
    </div>
    
    <div class="span10">
        
    <?php 
	query_posts(array('post_type'=> 'mixes', 'order'=>'ASC' ));
	if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
    
    <div class="row-fluid">
    <div class="entry span9">
    	
        <?php if(has_post_thumbnail()){ ?>
        <div class="shadow">
        <?php the_post_thumbnail('slideshow',array('class'=>'hero')); ?>
        </div>
        <?php } ?>
        
        <div class="sharing">
            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
            <div class="tweet">
            <a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="futureboogie">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
        </div>
        
        <h2><?php the_title();?></h2>
        
    	<?php the_content(__('(more...)')); ?>
        
        <?php if (get_field('media')) {
			echo '<ul class="media">';
			while (has_sub_field('media')) {
				echo '<li>';
				$mix_link = get_sub_field('link');
				$width ='100%';
				media_embed($mix_link,$width,'');
				echo '</li>';
				}
			echo '</ul>';
			}
		?>
        
        <hr />
        
    </div> 
    
    <div class="links span3">
        
        <ul>
        	<h6 class="more">Mix Information</h6>
            <li><?php the_title();?> at <?php the_field('venue'); ?></li>
            <li><?php the_field('date');?></li>
            <li><?php the_field('doors');?></li>
            <li><?php the_field('extra');?></li>
        </ul>
        
    </div>
    
    </div>

	<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    
    </div><!--post wrap-->
        
</div>



<?php get_footer(); ?>