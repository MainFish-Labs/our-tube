<?php get_header(); ?>

<div class="row single">
  <div class="col-xxs-24 col-xs-24 col-sm-18 col-md-16 col-lg-16 col-xlg-15">
		<h1>Post Name</h1>
	</div>
	<div class="col-xxs-24 col-xs-24 col-sm-6 col-md-8 col-lg-8 col-xlg-9 hidden-xs hidden-xxs text-right h3-rel">
		<h3>Related Videos</h3>
	</div>
  <div class="col-xxs-24 col-xs-24 col-sm-18 col-md-16 col-lg-16 col-xlg-15">
		<div align="center" class="embed-responsive">
			<?php
				$link_donor = htmlspecialchars_decode(get_post_meta($post->ID, 'link', true));
				$a = file_get_contents($link_donor);
				$pattern = '%source[^>]*type%im'; // Ищем нужный блок текста
				preg_match($pattern, $a, $out);
				$video_link1 = str_replace('source src="','', $out[0]);
				$video_link = str_replace('" type','', $video_link1);
				//echo $link_donor;
			?>
		    <!-- <video autoplay loop class="embed-responsive-item" controls="controls"> -->
		    <video loop class="embed-responsive-item" controls="controls">
		        <source src="<?php echo $video_link; ?>" type="video/mp4">
		    </video>
		</div>
		<input type="text" class="donor_link" value="<?php echo get_post_meta($post->ID, 'link', true) ?>" disabled>
  </div>
	<div class="col-xxs-24 col-xs-24 col-sm-6 col-md-8 col-lg-8 col-xlg-9 visible-xs visible-xxs">
		<h3>Related Videos</h3>
	</div>
	<div class="col-xxs-24 col-xs-24 col-sm-6 col-md-8 col-lg-8 col-xlg-9">
		<div class="row">
			<div class="col-xxs-24 col-xs-12 col-sm-24 col-md-24 col-lg-24 col-xlg-12 rel-show">
				<div class="rel-show-unit">

				</div>
			</div>
			<div class="col-xxs-24 col-xs-12 col-sm-24 col-md-24 col-lg-24 col-xlg-12 hidden-sm hidden-xxs rel-show">
				<div class="rel-show-unit">

				</div>
			</div>
		</div>
		<div class="row rel-thumbs">
			<?php get_template_part('parts/latest','sidebar'); ?>

		</div>
	</div>
</div> <!-- .single -->

<?php get_footer(); ?>
