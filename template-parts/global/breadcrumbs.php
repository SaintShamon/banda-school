<?php
	if ( function_exists('yoast_breadcrumb') ) {
		$show_right_sidebar = get_field('show_right_sidebar');
		yoast_breadcrumb('<div class="breadcrumbs wrapper '.( ( $show_right_sidebar ) ? 'has-sidebar' : '' ).'">','</div>');
	}
?>