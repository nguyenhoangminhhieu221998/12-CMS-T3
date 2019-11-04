<article id="post<?php the_ID(); ?>"><?php post_class();?> >
	<div class="entry-thumbnail">
		<?php hieunguyen_thumbnail('thumbnail'); ?>
		
	</div>
	<div class="entry-header">
		<?php hieunguyen_entry_header(); ?>
		<?php hieunguyen_entry_meta(); ?>
	</div>
	<div class="entry-content">
		<?php hieunguyen_entry_content(); ?>
		<?php (is_single() ? hieunguyen_entry_tag() : ''); ?>
	</div>
</article>
