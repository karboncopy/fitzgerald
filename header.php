<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes();?>>
<head profile="http://gmpg.org/xfn11">
		<title> <?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset'); ?>"/>
		<meta name="generator" content="WordPress<?php bloginfo('version'); ?>"/>
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url');?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
		<?php wp_get_archives('type=monthly&format=link');?>
		<?php //comments_popup_script();//off by default ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head();?>
	<style type="text/css">
	
	</style>
</head>
<body <?php body_class();?>>
<div id="wrapper">
<div id="header">
	<div id="blogtitle"><h1 class="site-title"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

	
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	</div>
	<div id="navmenu">
	
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'page-navi'  ) ); ?>
		
	</div>
</div>	