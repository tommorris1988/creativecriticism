<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<div class="blog-wrap">



    <div class="post" id="error-404">
        
        
        
            <h1 class="blogtitle"><label><a>404</a></label></h1>
            <h2><?php _e('Page Not Found', 'foundation'); ?></h2>
            <div class="meta"><?php edit_post_link(__('Edit This')); ?></div>
            
            <p><label><?php _e('Server cannot find the file you requested. File has either been moved or deleted, or you entered the wrong URL or document name. Look at the URL. If a word looks misspelled, then correct it and try it again. If that doesnt work You can try our search option to find what you are looking for.', 'foundation'); ?></label></p>
            <?php get_search_form(); ?>
        
        
        
        
	</div>
        
        
        
        
        
</div>
    

<?php get_footer(); ?>