<?php
/**
 * This is the default template for the maximized info window display of a clicked marker
 * in a Geo Mashup map. 
 *
 * Don't modify this file! It will be overwritten by upgrades.
 *
 * Instead, copy this file to "info-window-max.php" in your geo-mashup-custom directory,
 * or "geo-mashup-info-window-max.php" in your theme directory. Those files will
 * take precedence over this one.
 *
 * @package GeoMashup
 */

// Avoid nested maps
add_filter( 'the_content', array( 'GeoMashupQuery', 'strip_map_shortcodes' ), 1, 9 );
?>

<style>
.info-window-max { 
	font-size:80%; 
	overflow:scroll; 
	min-width:600px;
	max-width:600px;
	}
.scroll-wrapper {
	-webkit-overflow-scrolling: touch;
  	overflow-y: scroll;
  	overflow-x: hidden;
}
/*-- Geo Mashup Info Window --*/
.gm-style .gm-style-iw {
    background-color: #282828;
    padding: 7px;
    left: 7px !important;
}	
</style>

<div class="info-window-max">
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="scroll-wrapper" style="width: 600px; height:500px; background-color: #191e23;">
		<iframe src="<?php echo get_permalink(); ?>" style="width: 600px; height:500px; margin: -2px 0px 0px -2px;"></iframe>
		</div>

	<?php endwhile; ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
</div>
