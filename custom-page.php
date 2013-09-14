<?php 
/*
Template Name: custom-page
*/ ?>
<?php get_header();?>
<div id="container">
	<div id="entry">
		<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
	<div class="post" id="post-<?php the_ID();?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
			<div class="entry">
				<span class="postmetadata" id="time"><a class="permalink_date" href="<?php the_permalink(); ?>"><?php the_time('F j, Y')?></a></span>
				<?php the_content();?>
				<?php wp_link_pages('<p><strong>Pages</strong>','</p>','number');?>
				<?php edit_post_link('Edit','<p>','</p>');?>
				
			</div>
	</div>	
	<?php endwhile; ?>
		
	<?php else : ?>
		<h2><?php _e('Not Found','generic');?></h2>
	<?php endif; ?>
	</div>
</div> <!--#container-->
<?php get_sidebar();?>
<?php get_footer();?>
</div>
</body>
</html>		