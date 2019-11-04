<?php
/**
 * khai báo giá trị
 * themes_url = lấy đường dẫn của thư mục core
 */
define('THEME_URL', get_stylesheet_directory() );
define('CORE',THEME_URL."/core");
/**
 * @ NHung file /core/init.php
 */
require_once (SORE."/init.php");
/**
 * thiet lap cieu rong noi dung
 */
if(!isset($content_width)){
    $content_width = 620;
}
/**
 * khai bao chuc nang cuar theme
 */
if(!function_exists('hieunguyen_theme_setup')){
    function hieunguyen_theme_setup(){
        $language_folder = THEME_URL .'/languages';
        load_theme_textdomain('hieunguyen', $language_folder);
        /*tu dong them link vao head*/
        add_theme_support('automatic-feed-links');
        /*theme post thumbnail*/
        add_theme_support('post-thumbnails');
        /*theme post Format*/
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        add_theme_support('title-tag');

        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);

        register_nav_menu('primary-menu', __('Primary Menu', 'hieunguyen'));
/** @var [description]:tao sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'hieunguyen'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title'=> '<h3 class="widgettitle">',
            'after_title' =>'</h3>'

        );
        register_sidebar($sidebar);
    }
    add_action('init','hieunguyen_theme_setup');

}
/*-----
 * teamplate fun
 */
if(!function_exists('hieunguyen_header')){
    function hieunguyen_header(){?>
        <div class="site-name">
            <?php
                if(is_home()){
                    printf('<h1><a href="%2$s" title="%2$s">%3$s</a></h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                } else {
                    printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                }

            ?>
        </div>
<div class="site-description"><?php bloginfo('description');?></div><?php
    }
}
/**
 * thiet lap menu
 */
if(!function_exists('hieunguyen_menu')){
    function hieunguyen_menu($menu){
        $menu =array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}
/** phan trang
 */
if(!function_exists('hieunguyen_pagination')){
    function hieunguyen_pagination(){
        if($GLOBALS['wp_query']->max_num_pages < 2){
            return '';
        }?>
        <nav class="pagination" role="pavigation">
            <?php if (get_next_posts_link()) : ?>
            <div class="prev"><?php next_posts_link( __('Older Posts','hieunguyen') ); ?></div>
            <?php endif; ?>
            <?php if(get_previous_posts_link()) : ?>
            <div class="next"><?php previous_posts_link( __('Newest Posts','hieunguyen'));?></div>
            <?php endif; ?>
        </nav>
    <?php }
}
/** hien thi */
if (!function_exists('hieunguyen_thumbnail') ) {
  function hieunguyen_thumbnail($size) {
    if ( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
      <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?> </figure>
    <?php endif; ?>
    <?php }
  }
  /** hien thi tieu de post*/

  if (!function_exists(hieunguyen_entry_header)) {
    function hieunguyen_entry_header(){?>
      <?php if (is_single()):?> {
        <h1 class="entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?>></a></h1>
      <?php else: ?>
        <h2 clas="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?>></a></h2>
      <?php endif; ?>
      <?php }
    }
    /** lay du lieu post*/
    if (!function_exists('hieunguyen_entry_meta')) {
      function hieunguyen_entry_meta(){?>
        <?php if (!is_page()) : ?>
          <div class="entry-meta">
            <?php
            printf(__('<span class="author"> Posted by %1$s','hieunguyen'),
            get_the_author() );
            printf(__('<span class="date-published"> at %1$s','hieunguyen'),
            get_the_date() );
            printf(__('<span class="category"> in %1$s','hieunguyen'),
            get_the_category_list() );
            if (comments_open()) :
              echo '<span class="meta-reply">';
              comments_popup_link(
                __('leave a comment ', 'hieunguyen'),
                __('One comment','hieunguyen'),
                __('% comments','hieunguyen'),
                __('Read all comments', 'hieunguyen')
              );
            echo '</span>';
            endif;
          ?>
          </div>
        <?php  endif; ?>
      <?php  }
    }
/** hien thi noi dung*/
if (!function_exists('hieunguyen_entry_content')) {
    function hieunguyen_entry_content(){
        if (!is_single()  && !is_page()) {
            the_excerpt();
        }else{
            the_content();
        }
        /*Phan trang trong single*/
        $link_pages = array(
            'before' =>__('<p>Page:','hieunguyen'),
            'after' =>  '</p>',
            'nextpagelink' => __('Next Page', 'hieunguyen'),
            'previouspagelink' =>__('Previous Page', 'hieunguyen')
            );
            wp_link_pages($link_pages);
        }
    }
function hieunguyen_readmore(){
  return '<a class="read-more" href="'.get_permalink(get_the_ID() ).'">'.__('...[Read More]','hieunguyen').'</a>';
}
add_filter('exerpt_more', 'hieunguyen_readmore');
/**
 * hienthi tag
 */
if(!function_exists('hieunguyen_entry_tag')){
function hieunguyen_entry_tag() {
if (has_tag()) :
  echo '<div class="entry-tag">';
  printf(__('Tagged in %1$s','hieunguen'), get_the_tag_list('',','));
  echo '</div>';
endif;
  }
}
