<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.gif" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-responsive.css" >
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/css/flexslider.css" />

<script type="text/javascript" src="//use.typekit.net/rxt6kxt.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if IE]>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-ie7.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie7.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie8.css" type="text/css" media="screen" />
<![endif]-->

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?> >

<div id="navigation" class="container-fluid">
	<div class="row-fluid outer">
    	
        <div class="span1"></div>
        <div class="span3">
            <a href="<?php bloginfo('url');?>" id="logo" title="Festival Home">Festival!</a>
        </div>
        <div class="span6">
			<?php wp_nav_menu( array('menu' => 'Main','menu_class'=>'nav','container'=>'' )); ?>
    	</div>
        <div class="span2" style="text-align:right">
			<div id="topb"><a href="#">^ Top</a></div>
		</div>
        
    </div>
</div>