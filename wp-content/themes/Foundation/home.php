<?php
/**
* This template displays the blog posts index page.
* @package WordPress
* @subpackage Foundation_Theme
*/
get_header();
?>

<?php $i == 0; 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid entry <?php if($i == 0){ echo 'first';} ?>">
	<div class="row-fluid outer">
	
		<div class="span1"></div>
	
		<div class="span3 info">
		<div class="follower">
		
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
			
			<span class="date"><?php the_time('M Y');?></span>
		</div>
		</div>
		
		<div class="span6">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class'=>'')); ?></a>
		</div>
		
	</div>
</div>
<?php $i++; endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>