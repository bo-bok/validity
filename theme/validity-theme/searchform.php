<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="search-filters">
		<input type="text" placeholder="Search" class="field" name="s" id="s"/>
		<?php wp_dropdown_categories('name=countries&hide_empty=0&child_of=7&show_option_none=Select a country&order=DESC'); ?>
		<?php wp_dropdown_categories('name=content-type&hide_empty=0&child_of=13&show_option_none=Select Content Type&order=DESC'); ?>
	</div>
	<div class="search-submit">
		<button class="button_transparent" type="submit">Search</button>
	</div>
</form>
