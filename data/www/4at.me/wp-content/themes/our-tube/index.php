<?php get_header(); ?>

<div class="row headings">
	<div class="col-md-6 col-lg-4 col-xlg-3 hidden-sm hidden-xs hidden-xxs">
		<h3>Categories</h3>
	</div>
	<div class="col-xxs-24 col-xs-14 col-sm-16 col-md-12 col-lg-10 col-xlg-12">
		<h1 class="title">Lastet Videos <small class="hidden-xs hidden-xxs">New uploads</small></h1>
	</div>
	<div class="col-xxs-24 col-xs-10 visible-xs visble-xxs">
		<div class="input-group has-primary">
				<input type="text" class="form-control" placeholder="What are you looking for?">
				<span class="input-group-btn">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					<button class="btn btn-primary" type="button">Search</button>
				</span>
		</div>
	</div>
	<div class="col-xxs-24 col-xs-24 col-sm-8 col-md-6 col-lg-10 col-xlg-9">
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
</div>

<div class="row last-posts home-thumbs is-flex-narrow">

	<div class="cat-list is-flex hidden-xs hidden-xxs">
		<div class="cat-col">
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
		</div>
	</div>

	<div class="big-show visible-md visible-lg visible-xlg">
		<div class="big-unit unit">

		</div>
	</div>

	<?php get_template_part('parts/latest','index'); ?>

</div>

<div class="container pag-box">
<div class="row">
<nav class="text-center" aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="disabled">
			<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
<?php get_footer(); ?>
