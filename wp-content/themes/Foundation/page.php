<?php
/**
* This template displays the single article page.
* @package WordPress
* @subpackage Foundation_Theme
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid entry first">
	<div class="row-fluid outer">
		<h2 class="entry-title offset1 span8"><?php the_title(); ?></h2>
	</div>
	<div class="row-fluid outer" id="container">
	
		<div class="span1"></div>
	
		<div class="span3 info">
			<div class="follow">
			
			<?php $links = get_field('links');
			if($links) : ?>
			<ul class="links">
				<h5 class="sub-head">Links</h5>
			<?php foreach( $links as $link ): ?>
				<li><a href="<?php echo $link['address']; ?>"><?php echo $link['label']; ?></a></li>	
			<?php endforeach; ?>
			</ul>
			<?php endif; ?>
			
			<span class="date"><?php the_time('M Y');?></span><br /><br />
			
			<a href="#gallery">View Gallery +</a>
			
			</div>
		</div>
		
		<div class="span6 content">
			<?php the_content(); ?>
		</div>
		
	</div>
</div>

<?php $i++; endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php $images = get_field('gallery');
	if($images) : ?>
	<?php 
	$i = 1; foreach( $images as $image ): ?>
<div class="gallery container-fluid entry">
	<div class="row-fluid outer">
	
		<div class="span1"></div>
	
		<div class="span3 info" >
		
			<p class="date">0<?php echo $i; ?></p>
		
			<h3 class="entry-title"><?php echo $image['description']; ?></h3>
			
			<p><?php echo $image['caption']; ?></p>
			
			<span class="date">Photograph Copyright <?php echo $image['alt'];?></span>
			
		</div>
		
		<div class="span6">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
		
	</div>
</div>
	<?php $i++; endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>