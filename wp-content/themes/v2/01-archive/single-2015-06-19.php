<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php
$post = $wp_query->post;

if (in_category('cat-00-01')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
}
		
if (in_category('cat-00-02')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
}

if (in_category('cat-00-03')) {
		include (STYLESHEETPATH.'/single-unesco.php');
		return;	
}

if (in_category('cat-01-01')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
}
		
if (in_category('cat-01-02')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;	
}
		
if (in_category('cat-01-03')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
}
		
if (in_category('cat-01-04')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
}
		
if (in_category('cat-01-05')) {
		include (STYLESHEETPATH.'/000_0000.php');
		return;
		
		
} else { ?>
	<?php include ('single.php');?>
<?php } ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>