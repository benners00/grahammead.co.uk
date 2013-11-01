<?php
	
	
	
	/*
	*	Custom Font
	*	Add to (or create) functions.php file in child theme
	*/
	
	// Replace existing font
	wp_dequeue_style( 'cudazi_googlefont' );
	
	// Load new Font URL
	// Found on http://www.google.com/webfonts
	wp_enqueue_style('cudazi_googlefont', 'http://fonts.googleapis.com/css?family=Lobster+Two:700italic',false, '','screen');
	
	
	// Load the CSS into the theme (update font-family name)
	function cudazi_add_css_childtheme() { ?>
		<style>			
			#logo { font-family: 'Lobster Two', cursive; }
		</style>
	<?php }	
	add_action('wp_head','cudazi_add_css_childtheme');