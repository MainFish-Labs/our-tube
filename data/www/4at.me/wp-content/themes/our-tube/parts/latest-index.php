<?php
global $post;
$postslist = get_posts( array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' ) );
foreach ( $postslist as $post ){
	setup_postdata($post);
	?>
	<div class="col-xxs-24 col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xlg-3 thumb-col">
			<div class="thumb-group">
				<a class="thumb-link" href="#">
					<img src="<?php echo get_post_meta($post->ID, 'link_thumbs', true) ?>">
					<span class="thumb-views">666 views</span>
					<span class="thumb-dur"><?php $duration = get_post_meta($post->ID, 'duration', true); $duration = date("i:s", mktime(0, 0, $duration)); echo $duration ?></span>
					<div class="thumb-info">
						<h6 class="thumb-name"><?php the_title(); ?></h6>
					</div>
				</a>
			</div>
	</div>
	<?php
}
wp_reset_postdata();
