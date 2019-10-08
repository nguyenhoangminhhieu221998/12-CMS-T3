<?php get_header(); ?>

<div class="content-wrap">

 <?php while ( have_posts() ) : the_post(); ?>
 <div style ="width:33%; float: left">
 <?php the_post_thumbnail(full,array( "title" => get_the_title(),"alt" => get_the_title(),"style" => "width:100%; height:auto" ));?>
 <h2><?php the_title();?></h2>
 <p><?php the_excerpt();?></p>
 <!--<a href="<?php the_permalink() ;?>">Xem them</a>-->

 </div>
 <?php endwhile;?>

 <div class="pages">
 <?php previous_posts_link( '&laquo; TR??C', $loop->max_num_pages) ?>
 <?php next_posts_link( 'TI?P &raquo;', $loop->max_num_pages) ?>
 </div>
 </div>

<?php get_footer(); ?>
