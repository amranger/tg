<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="screen-reader-text" for="s">Search for:</label>
	<div class="input-group">
		<input type="text"  class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search the Site...">
		<div class="input-group-btn">
			<button type="submit" class="btn btn-default" id="searchsubmit"><i class="fa fa-search"></i></button>
		</div>
	</div>
</form>


