<div style="width:30%; float:left">

 <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
 dynamic_sidebar( 'sidebar-1' );
 endif;
 function sideright_widgets_init() {

register_sidebar( array(
 'name' => 'Witget_side',
 'id' => 'sidebar-1',
 'before_widget' => '<div>',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ) );

}
add_action( 'widgets_init', 'sideright_widgets_init' );
 ?>

</div>
