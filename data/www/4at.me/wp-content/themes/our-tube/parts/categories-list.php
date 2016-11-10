<?php
	$args20 = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'ID',
	'order'              => 'ASC',
	'show_last_update'   => 0,
	'style'              => 'list',
	'show_count'         => 0,
	// 'hide_empty'         => 1,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	// 'title_li'           => __( 'Categories' ),
	'title_li'           => '',
	'number'             => 20,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
	);
?>

<?php
	$args40 = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'ID',
	'order'              => 'DESC',
	'show_last_update'   => 0,
	'style'              => 'list',
	'show_count'         => 0,
	// 'hide_empty'         => 1,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => false,
	// 'title_li'           => __( 'Categories' ),
	'title_li'           => '',
	'number'             => 20,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
	);
?>

<div class="cat-sub">
	<ul class="nav-stacked">
		<?php wp_list_categories( $args20 ); ?>
	</ul>
</div>
<div class="cat-sub">
	<ul class="nav-stacked">
		<?php wp_list_categories( $args40 ); ?>
	</ul>
</div>

<!--
<div class="cat-sub">
	<ul class="nav-stacked">
		<li><a href="#">Amateur</a></li>
		<li><a href="#">Anal</a></li>
		<li><a href="#">Asian</a></li>
		<li><a href="#">Ass</a></li>
		<li><a href="#">BBW</a></li>
		<li><a href="#">BDSM</a></li>
		<li><a href="#">Babe</a></li>
		<li><a href="#">Big Boobs</a></li>
		<li><a href="#">Big Cocks</a></li>
		<li><a href="#">Blonde</a></li>
		<li><a href="#">Blowjob</a></li>
		<li><a href="#">Brunette</a></li>
		<li><a href="#">Cumshot</a></li>
		<li><a href="#">Fetish</a></li>
		<li><a href="#">First time</a></li>
		<li><a href="#">Gangbang</a></li>
		<li><a href="#">Group Sex</a></li>
		<li><a href="#">Hardcore</a></li>
		<li><a href="#">HD</a></li>
		<li><a href="#">Hentai</a></li>
	</ul>
</div>
<div class="cat-sub">
	<ul class="nav-stacked">
		<li><a href="#">Interracial</a></li>
		<li><a href="#">Latin</a></li>
		<li><a href="#">Lesbian</a></li>
		<li><a href="#">Massage</a></li>
		<li><a href="#">Masturbation</a></li>
		<li><a href="#">Mature</a></li>
		<li><a href="#">Milf</a></li>
		<li><a href="#">Nylon</a></li>
		<li><a href="#">Outdoor</a></li>
		<li><a href="#">POV</a></li>
		<li><a href="#">Pornstar</a></li>
		<li><a href="#">Reality</a></li>
		<li><a href="#">Redhead</a></li>
		<li><a href="#">Teen</a></li>
		<li><a href="#">Threesome</a></li>
		<li><a href="#">Toys</a></li>
		<li><a href="#">Vintage</a></li>
		<li><a href="#">Voyeur</a></li>
		<li><a href="#">Virtual reality</a></li>
	</ul>
</div>
-->
