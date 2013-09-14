<?php
load_theme_textdomain('fitzgerald',get_template_directory().'/languages');

if ( ! isset( $content_width ) )
	$content_width = 600;

function fitzgerald_home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}

add_filter( 'wp_page_menu_args', 'fitzgerald_home_page_menu_args' );

function fitzgerald_register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu','fitzgerald' ), 'extra-menu' => __( 'Extra Menu','fitzgerald' ))
  );
}

add_action( 'init', 'fitzgerald_register_my_menus' );



    register_sidebar();

	function fitzgerald_scripts_styles(){
	
			
			wp_enqueue_style('fitzgerald-font-francois-one','http://fonts.googleapis.com/css?family=Francois+One');
			wp_enqueue_style('fitzgerald-font-istok-web','http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic');

			wp_enqueue_style('fitzgerald-menu-style',get_template_directory_uri() . '/css/menu-style.css');
			wp_enqueue_style('fitzgerald-style',get_stylesheet_uri());

			wp_enqueue_script( 'fitzgerald-navigation', get_template_directory_uri() . '/js/scripts.js', array('jquery','jquery-effects-core'), '1.0');
		}
	
add_action('wp_enqueue_scripts','fitzgerald_scripts_styles');
	
if ( ! function_exists( 'fitzgerald_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own fitzgerald_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * */
function fitzgerald_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>','fitzgerald'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.','fitzgerald' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'fitzgerald' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)','fitzgerald' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:','fitzgerald' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)','fitzgerald' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

$fitzgerald_args=array(
	'flex-width'=>true,
	'width'=>'',
	'flex-height'=>true,
	'height'=>''
);

$fitzgerald_defaults=array(
	'default-color'=>'408080',
	'default-image'=>get_template_directory_uri().'/images/soft_circle_scales.png'
);

add_theme_support('custom-background', $fitzgerald_defaults);
add_theme_support( 'automatic-feed-links');
add_theme_support('custom-header',$fitzgerald_args);


require( get_template_directory() . '/inc/custom-header.php' );

	
?>