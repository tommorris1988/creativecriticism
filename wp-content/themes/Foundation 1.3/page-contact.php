<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<style type="text/css">
#artist-<?php the_id(); ?> a { color:rgb(247,147,30); }
</style>

<div class="row-fluid">
    
    <div class="span10">
        
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
    
    <div class="row-fluid">
    
        <div class="entry offset2 span9">
            <?php the_content(); ?>
        </div>
        
    </div>
    <div class="row-fluid">
        <div class="offset2 span4">
        	<?php echo do_shortcode('[contact-form-7 id="155" title="Contact form 1"]');?>
        </div>
        <div class="span6">
        	<p>Sign up for our newsletter here.</p>
        	<?php $args = array(
			'prepend' => '', 
			'showname' => false,
			'emailtxt' => '',
			'emailholder' => 'Enter your email address', 
			'showsubmit' => true, 
			'submittxt' => 'Send', 
			'jsthanks' => false,
			'thankyou' => 'Thank you for subscribing to our mailing list'
			);
			echo smlsubform($args);?>
            <div class="social" style="float:left;">
            	<a class="tooltip" href="https://www.facebook.com/futureboogierecordings" target="_blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/fbb.png" /><span class="classic">Find Futureboogie on Facebook<div class="arrow-down"></div></span></a>
                <a class="tooltip" href="https://twitter.com/futureboogie1" target="_blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/twb.png" /><span class="classic">Follow Futureboogie on Twitter<div class="arrow-down"></div></span></a>
                <a class="tooltip" href="http://www.youtube.com/user/FutureboogieOfficial" target="_blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/ytb.png" /><span class="classic">Watch Previous Acts on Youtube<div class="arrow-down"></div></span></a>
                <a id="soundcloud" class="tooltip" href="https://soundcloud.com/futureboogie" target="_blank" title=""><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/scb.png" /><span class="classic">Listen to our mixes<div class="arrow-down"></div></span></a>
                <a id="beatport" class="tooltip" href="http://www.beatport.com/label/futureboogie-recordings/19973" target="_blank" title=""><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/bpb.png" /><span class="classic">Find Futureboogie on Beatport<div class="arrow-down"></div></span></a>
            </div>
        </div>
    
    </div>

	<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    
    </div><!--post wrap-->
        
</div>



<?php get_footer(); ?>