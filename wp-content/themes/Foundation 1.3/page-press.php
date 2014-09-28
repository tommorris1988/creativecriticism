<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<?php if ( !post_password_required(13) ) { ?>

<div id="press">

	<?php query_posts(array('post_type'=> 'press','order'=>'ASC','orderby'=>'date' ));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <h4 class="title divide"><?php the_title(); ?></h4>
    
	<div class="row-fluid">
    
	<?php if(get_the_content()) : ?>
    <div class="press-entry entry span6">
    
    	<h4 class="title">Bio</h4>
    	
        <div>
			<?php the_content(__('(more...)')); ?>
        </div>
        
    </div>
    <?php endif; ?>
    
    
	<?php $images = get_field('gallery');
    if( $images ): ?>
    <div class="press-entry entry span4">
        <h4 class="title">Images</h4>
        <ul class="images">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img class="thumb" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <a href="<?php echo $image['url']; ?>" target="_blank">Download Max</a> /
                    <a href="<?php echo $image['sizes']['large']; ?>" target="_blank">Download Large</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif;?>
    
    <?php if (get_field('downloads')) : ?>
    <div class="press-entry entry span2">
    	<h4 class="title">Downloads</h4>
        <ul class="images">
        <?php while(has_sub_field('downloads')): 
			$label = get_sub_field('label');
			$file = get_sub_field('file'); ?>
            <li><a href="<?php echo $file; ?>" target="_blank"><?php echo $label; ?></a></li>
        <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
    
    </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php } else {?>
	<p>
    <form action="<?php bloginfo('siteurl'); ?>/wp-login.php?action=postpass" method="post">
    <p>This page is password protected. Please enter your client password below:</p>
    <p><input name="post_password" id="<?php $label ?>" type="password" size="20" /><input type="submit" name="Submit" value="Submit" /></p>
    </form>
    </p>
<?php } ?>

<?php get_footer(); ?>
