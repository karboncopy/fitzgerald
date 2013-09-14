<div id="sidebar">
	<ul>
	<?php if(function_exists('dynamic_sidebar')&&dynamic_sidebar()):else:?>
		<li id="search">
			<?php get_search_form();?>
		</li>
		<li id="calendar"><h2><?php _e('Calendar','generic');?></h2>
			<?php get_calendar();?>
		</li>		
		
		<li><h2><?php _e('Categories','generic');?></h2>
			<ul>
				<?php wp_list_categories();?>
			</ul>
		</li>
		<li><h2><?php _e('Archives','generic'); ?></h2>
			<ul>
				<?php wp_get_archives('type=monthly');?>
			</ul>
		</li>
	
	
	<?php wp_list_bookmarks();?>
	<li><h2><?php _e('Meta','generic');?></h2>
			<ul>
				<?php wp_register();?>
				<li><?php wp_loginout();?></li>
				<?php wp_meta();?>
			</ul>
	</li>
	<?php endif;?>
	</ul>
</div>