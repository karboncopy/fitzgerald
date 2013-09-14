<?php get_header();?>
<div id="container">
	<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
	<div class="post" id="post-<?php the_ID();?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
			<div class="entry">
				<?php the_content();?>
				<?php wp_link_pages('<p><strong>Pages</strong>','</p>','number');?>
				<p class="postmetadata">
				<?php _e('Filed under&#58;','generic');?><?php the_category(', ')?><?php _e(' by ','generic'); ?><?php the_author();?><br/><?php edit_post_link('Edit','|','');?>
				</p>
			</div>
	</div>	
	<?php endwhile; ?>
		
	<?php else : ?>
		<h2><?php _e('Not Found','generic');?></h2>
	<?php endif; ?>
</div> <!--#container-->
<?php get_sidebar();?>
<?php get_footer();?>
</div>
</body>
</html>		