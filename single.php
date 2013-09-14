<?php get_header();?>
<div id="container">
	<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
	<div class="post" id="post-<?php the_ID();?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
			<div class="entry">
				<span class="postmetadata time"><a class="permalink_date" href="<?php the_permalink(); ?>"><?php the_time('F j, Y')?></a></span>
				<?php the_content();?>
				<?php wp_link_pages('<p><strong>Pages:</strong>','</p>','number');?>
				<p class="postmetadata">
				<?php the_tags( 'Tags for this article: ', ', ','.' ); ?> 
				<?php _e('Filed under&#58;','generic');?><?php the_category(', ')?>
				<?php _e(' by ','generic'); ?><?php the_author();?>
				<?php edit_post_link('Edit','|','');?>
				</p>
			</div>
			<div class="comments-template">
				<?php comments_template();?>
			</div>
	</div>	
	<?php endwhile; ?>
		<div class="navigation">
			<span class="alignleft"><?php previous_post_link('&larr; %link');?></span> <span class="alignright"><?php next_post_link('%link &rarr; ');?></span>
		</div>
	<?php else : ?>
		<h2><?php _e('Not Found','generic');?></h2>
		
	<?php endif; ?>
</div> <!--#container-->
<?php get_sidebar();?>
<?php get_footer();?>
</div>
</body>
</html>		