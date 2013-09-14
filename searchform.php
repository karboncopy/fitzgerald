<form method="get" id="searchform" action="<?php echo home_url(); ?>/">

<div>

	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="15" placeholder="Search here"/>

	<input type="submit" id="searchsubmit" value="Search" />

</div>

</form>