
<?php
	if (is_home() || is_front_page()) {
		bloginfo('name');
		echo "&nbsp;-&nbsp;";
		bloginfo('description');
	} else {
		the_title();
		echo "&nbsp;-&nbsp;";
		bloginfo('name');
		echo "&nbsp;-&nbsp;";
		bloginfo('description');
	}
?>
