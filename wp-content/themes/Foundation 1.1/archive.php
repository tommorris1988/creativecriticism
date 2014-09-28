<?php
/**
 * This Template displays all archives as final wordpress choice
 *
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<div class="blog-wrap">



	<h1 class="blog-page-title"><!-- Blog Title --></h1>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
    
        <h1 class="blogtitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2 class="date"><?php the_date(''); ?> | Posted by <?php the_author() ?></h2>
    	<div class="meta"><?php edit_post_link(__('Edit This')); ?></div>
    
        <?php the_content(__('(more...)')); ?>
            
        <div class="feedback">
            <a class="tw" href="https://twitter.com/share?url=<?php the_permalink(); ?>">Share on Twitter</a> | <a class="fb" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>">Share on Facebook</a> | <a class="gp" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Share on Googleplus</a>
        	<div class="clearfix"></div>
            <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
        </div>
        
        <div class="comments">
        	<?php comments_template(); // Get wp-comments.php template ?>
        </div>
    
    </div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>

</div><!--end Blog Wrap -->





<ul class="sidebar">
	<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
</ul>





<?php get_footer(); ?>
