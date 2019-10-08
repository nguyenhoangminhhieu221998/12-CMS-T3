<!DOCTYPE html>
<html>
<body>
<h2><?php echo "Welcome to Wordpress "; ?></h2>
<p>Hello.</p>
<p>Chào tất cả các bạn đã đến với wordpress.</p>

</body>
</html>
<?php get_header();

 if ( have_posts() ) :
 get_template_part( 'content');
 else :
 get_template_part( 'content', 'none' );
 endif;

 get_sidebar();
get_footer(); ?>
