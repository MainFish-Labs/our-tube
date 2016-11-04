<?php
global $post;
$postslist = get_posts( array( 'posts_per_page' => 100, 'order'=> 'ASC', 'orderby' => 'ID' ) );
foreach ( $postslist as $post ){
	setup_postdata($post);
	?>
	<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xlg-8 thumb-col">
			<div class="thumb-group">
				<a class="thumb-link" href="<?php echo get_permalink(); ?>">
					<img
						src="<?php echo get_post_meta($post->ID, 'link_thumbs', true) ?>"
						class="thumb rotate-thumbs {ethumbs:['<?php
							$thumbs_str = get_post_meta($post->ID, 'thumbs', true);
							$thumbs = str_replace(",", "','", $thumbs_str);
							echo  $thumbs; ?>'],selected_thumb:'<?php echo get_post_meta($post->ID, 'link_thumbs', true)
						?>'}"/>
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
