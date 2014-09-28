<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>


	<?php $images = get_field('gallery');
 
	if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img class="slide" src="<?php echo $image['sizes']['slideshow']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <?php endif;?>
    
    
    <div class="row-fluid" style="position:relative">
            <div id="agency" class="span3 green block">
                <h4 class="divide"><a href="<?php echo get_permalink('5'); ?>">Agency</a></h4>
                <h6 class="title">We take care of these artists...</h6>
                <ul>
            <?php query_posts(array('order'=>'ASC','posts_per_page'=> 10  ));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more bottom" href="<?php echo get_permalink('5'); ?>">More</a>
            </div>
                
            <div class="span3 blue block">
            	<h4 class="divide"><a href="<?php echo get_permalink('7'); ?>">Management</a></h4>
                <h6 class="title">We manage these guys...</h6>
                <ul>
					<?php query_posts(array('post_type'=> 'clients', 'order'=>'ASC','posts_per_page'=> 10  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more bottom" href="<?php echo get_permalink('7'); ?>">More</a>
            </div>
            
            <div class="span3 teal block">
            	<h4 class="divide"><a href="<?php echo get_permalink('6'); ?>">Label</a></h4>
                <h6 class="title">Latest releases...</h6>
                <ul class="blocks">
					<?php query_posts(array('post_type'=> 'releases', 'order'=>'ASC','posts_per_page'=> 5  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_field('release_name'); ?> / <?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more bottom" href="<?php echo get_permalink('11'); ?>">More</a>
            </div>
            
            
            <div class="span3 purple block">
            	<h4 class="divide"><a href="<?php echo get_permalink('8'); ?>">On The Road</a></h4>
                <h6 class="title">Upcoming Events</h6>
                <ul class="blocks">
					<?php query_posts(array('post_type'=> 'events', 'order'=>'DESC','posts_per_page'=> 5, 'post_status' => 'future'  ));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <li><a href="<?php the_permalink();?>"><?php the_time('d.m.y'); ?> / <?php the_title(); ?></a></li>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </ul>
                <a class="more bottom" href="<?php echo get_permalink('8'); ?>">More</a>
            </div>
        
    </div>
        
    <div class="row-fluid">
        <div class="span12">
        	<div class="row-fluid">
            
                <div class="span4 pink block">
                    <h4 class="divide"><a href="<?php echo get_permalink('9'); ?>">Events</a></h4>
                    <?php
						$posts = get_field('featured_event',2);
						if( $posts ):
							foreach( $posts as $post):
							setup_postdata( $post );
							?>
                            <div class="row-fluid" style="position:relative">
                            <div class="span6 short">
                            	<?php the_post_thumbnail('medium'); ?>
                            </div>
							<div class="span6" style="padding-left:5px">
								<h6 class="first"><a href="<?php the_permalink(); ?>"><?php the_time('d.m.y'); ?><br /><?php the_title(); ?><br /><?php the_field('venue'); ?></a></h6>
								<?php the_excerpt(); ?>
                                <br /><br />
                                <a class="more bottom" href="<?php the_permalink(); ?>">More</a>
							</div>
                            </div>
                            <?php endforeach; wp_reset_postdata(); ?>
						<?php endif; ?>
                </div>
                
                <div class="span4 block">
                    <h4 class="divide"><a href="<?php echo get_permalink('10'); ?>">Mixes</a></h4>
					<?php query_posts(array('post_type'=> 'mixes', 'posts_per_page'=> 1  ));
                    if (have_posts()) : while (have_posts()) : the_post();
					$links = get_field('media');
					$first_row = $links[0];
					$first_row_link = $first_row['link'];
					$height = 100;
					// media_embed($first_row_link, 300, $height); ?>
                    <!--<?php the_post_thumbnail('wide'); ?>-->
                    <object height="81" width="100%"><param name="movie" value="https://player.soundcloud.com/player.swf?url=<?php echo $first_row_link; ?>&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false&amp;show_playcount=true&amp;show_comments=true"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" src="https://player.soundcloud.com/player.swf?url=<?php echo $first_row_link; ?>&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false&amp;show_playcount=true&amp;show_comments=true" type="application/x-shockwave-flash" width="100%" height="81"></embed></object>
                    <h5 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
                    <?php the_excerpt(); ?>
                    
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; wp_reset_query(); ?>
                </div>
                
                <div class="span4 grey">
                
                    <div class="row-fluid">
                    
                        <div class="block" style="padding-bottom:0;">
                            <h4 class="divide"><a href="https://twitter.com/futureboogie1" target="_blank">Twitter</a></h4>
                            <a class="twitter-timeline"  href="https://twitter.com/futureboogie1" data-tweet-limit="1" data-chrome="nofooter noheader" data-widget-id="358166772593078274" >Tweets by @futureboogie1</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        
                        <div class="block">
                            <h4 class="divide">Subscribe</h4>
                            <p>Sign up here to receive news and updates on all runnings for the agency, management, label and events. We don't share. We don't spam. We're always interesting.</p>
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
                        </div>
                    
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>


<?php get_footer(); ?>
