<?php get_header(); ?>

<div class="row headings">
	<?php get_template_part('parts/headings'); ?>
</div>

<div class="row last-posts home-thumbs is-flex-narrow">

	<div class="cat-list is-flex hidden-xs hidden-xxs">
		<div class="cat-col">
			<?php get_template_part('parts/categories', 'list'); ?>
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
