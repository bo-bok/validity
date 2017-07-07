<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<input type="text" placeholder="Search" class="field" name="s" id="s"/>

	<input type="submit" class="submit" name="submit" id="searchsubmit" />

	<div class="dropdown">
		<span>Filter 1</span>
		<div>
			<a href="#">Option 1 a</a>
			<a href="#">Option 1 b</a>
			<a href="#">Option 1 c</a>
		</div>
	</div>

	<div class="dropdown">
		<span>Filter 2</span>
		<div>
			<a href="#">Option 2 a</a>
			<a href="#">Option 2 b</a>
			<a href="#">Option 2 c</a>
		</div>
	</div>
</form>


<!-- if button needed -->
	<!-- <button>
		<input type="submit" class="submit" name="submit" id="searchsubmit" />
	</button> -->
