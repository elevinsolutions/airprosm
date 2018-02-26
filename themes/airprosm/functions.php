<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


function addQuote(){
	
    session_start();
    
	if (!($_POST['captcha'] == $_SESSION['captcha']['code'])){
		echo "wrong_captcha";

	} else {
		try {
				global $wpdb;

				// // save the appointment to db
				// $wpdb->insert($wpdb->prefix . "quotes",array(
				// 			'name'=>$_POST['contact_name'],
				// 			'email'=>$_POST['email'],
				// 			'phone'=>$_POST['phone'],
				// 			'category'=>$_POST['category'],
				// 			'comment'=>$_POST['comment']
				// ));

				// // notify admin via email
				// $to = get_option( 'admin_email' );
				// $subject = 'Air Pros Mechanical quote application';
				// $message = "Hi admin, \r\n \r\n" 
				// 			. "A client has requested a quote with the following details:\r\n \r\n"
				// 			. "Name: "	.$_POST['contact_name']." \r\n"
				// 			. "Email: "	.$_POST['email']." \r\n"
				// 			. "Phone: "	.$_POST['phone']." \r\n"
				// 			. "Product Category: "	.$_POST['category']." \r\n"
				// 			. "Comment: "	.$_POST['comment']." \r\n";

				
				// wp_mail( $to, $subject, $message );

				echo "success";
			} catch (Exception $e) {
				// echo $e;
				echo "error";
			}
	}
	die();
}

add_action('wp_ajax_addQuote', 'addQuote');
add_action('wp_ajax_nopriv_addQuote', 'addQuote'); 