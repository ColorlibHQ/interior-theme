<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Interior
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  interior_blog_posts_thumb
	 *
	 * @Hooked interior_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'interior_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook interior_blog_details_wrap_start
	 *
	 * @Hooked interior_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'interior_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  interior_blog_posts_meta
	 *
	 * @Hooked interior_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'interior_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  interior_blog_posts_title
	 *
	 * @Hooked interior_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'interior_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  interior_blog_posts_excerpt
	 *
	 * @Hooked interior_blog_posts_excerpt_cb
	 * @Hooked interior_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'interior_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  interior_blog_posts_info_link
	 *
	 * @Hooked interior_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'interior_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook interior_blog_details_wrap_end
	 *
	 * @Hooked interior_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'interior_blog_details_wrap_end' );
	
	?>
</article>