<?php
/**
 * This is the default template for full post display of a clicked marker
 * in a Geo Mashup map. 
 *
 * Don't modify this file! It will be overwritten by upgrades.
 *
 * Instead, copy this file to "full-post.php" in your geo-mashup-custom directory,
 * or "geo-mashup-full-post.php" in your theme directory. Those files will
 * take precedence over this one.
 *
 * @package GeoMashup
 */
?>

<?php
$post = $wp_query->post;

if (in_category('cat-00-01')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-resource.php');
		return;
}
		
if (in_category('cat-00-02')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-wikipedia.php');
		return;
}

if (in_category('cat-00-03')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-unesco.php');
		return;	
}

if (in_category('cat-01-01')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-news.php');
		return;
}
		
if (in_category('cat-01-02')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-project.php');
		return;	
}
		
if (in_category('cat-01-03')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-place.php');
		return;
}
		
if (in_category('cat-01-04')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-site.php');
		return;
}
		
if (in_category('cat-01-05')) {
		include (STYLESHEETPATH.'/geo-mashup-full-post-item.php');
		return;
		
		
} else { ?>
	<?php include ('single.php');?>
<?php } ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="meta"><span class="blogdate"><?php echo get_the_date(); ?></span> <?php the_category( ', ' ) ?></p>
		<?php if ( function_exists( 'has_post_thumbnail') and has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail(); ?>
		<?php endif; ?>

		<div class="storycontent">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
