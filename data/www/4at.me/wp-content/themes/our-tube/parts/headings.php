<?php if (is_home() || is_front_page()): ?>


	<div class="col-md-5 col-lg-4 col-xlg-3 hidden-sm hidden-xs hidden-xxs">
		<h3>Categories</h3>
	</div>
	<div class="col-xxs-8 col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xlg-12">
		<h1 class="title">Lastet Videos <small class="hidden-xs hidden-xxs">New uploads</small></h1>
	</div>
	<div class="col-xxs-16 col-xs-12 col-sm-12 col-md-7 col-lg-10 col-xlg-9">
		<div class="btn-sort-group text-right">
			<div class="btn-group" data-toggle="buttons">
			  <label class="btn btn-primary btn-sort active btn-xs">
			    <input type="radio" name="options" id="latest" autocomplete="off" checked>Latest
			  </label>
			  <label class="btn btn-primary btn-sort btn-xs">
			    <input type="radio" name="options" id="longest" autocomplete="off">Longest
			  </label>
			</div>
			<div class="btn-group" data-toggle="buttons">
			  <label class="btn btn-primary btn-sort active btn-xs">
			    <input type="radio" name="options" id="latest" autocomplete="off" checked>All
			  </label>
			  <label class="btn btn-primary btn-sort btn-xs">
			    <input type="radio" name="options" id="longest" autocomplete="off">HD
			  </label>
			</div>
		</div>
	</div>
	<div class="col-xxs-24 col-xs-24 visible-xs visible-xxs">
		<div class="input-group has-primary">
				<input type="text" class="form-control" placeholder="What are you looking for?">
				<span class="input-group-btn">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					<button class="btn btn-primary" type="button">Search</button>
				</span>
		</div>
	</div>

<?php elseif (is_single()): ?>

	<div class="col-xxs-24 col-xs-24 col-sm-18 col-md-16 col-lg-16 col-xlg-15">
		<h1>Post Name</h1>
	</div>
	<div class="col-xxs-24 col-xs-24 col-sm-6 col-md-8 col-lg-8 col-xlg-9 hidden-xs hidden-xxs text-right h3-rel">
		<h3>Related Videos</h3>
	</div>

<?php else: ?>

<?php endif; ?>
