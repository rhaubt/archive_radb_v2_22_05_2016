<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
#pushwrapper { 
  border: 0px; 
}

.push-wrapper div {
   width: 100%; 
   padding: 0px 0px 0px 0px;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
}
#right { background-color: #191e23; }

@media screen and (min-width: 600px) {
   .push-wrapper {
      height: auto; 
      overflow: hidden; // clearing 
   }
	#right { 
		margin: 2px;
		width: auto;
		height:100vh;
	}
}
.gm-map {
	height:100%;
}
.searchform-label {
	display: block !important;
	padding: 0px 0px 0px 0px !important;
	color: #282828 !important;
	font-size: 14px !important;
	background: none !important;
	box-shadow: none !important;
}
.searchform-input-wrapper input {
	display: block !important;
}
.searchform-controls input {
	display: block !important;
}
.searchform-input-wrapper {
    text-align: left;
}
.searchform-input-wrapper input[type="checkbox"] {
    width: 14px;
}
input[type="checkbox"], input[type="radio"], input[type="file"], input[type="hidden"], input[type="image"], input[type="color"] {
    border: 0px none;
    border-radius: 0px;
    padding: 0px;
</style>
<style>
/* DIV collapse for toolbox */
.collapse{
  font-size: 14px;
  display:block;
}
.collapse + input{
  display:none;
}
.collapse + input + *{
  display:none;
}
.collapse+ input:checked + *{
  display:block;
}
</style>

<html>
	<body>
		<div id="pushwrapper">
			<div id="right">
				<div style="position: fixed; top: 0px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<h2>Rock Art Database</h2>
				</div>
<!-- (1) search -->
				<div style="position: relative; top: 30px; left:-42px; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 10px 7px; color:#e0e0e0;" class="collapse" for="_10"><span style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Search &#128269 <span style="float:right; padding-right:5px;">&#9660</span></label>
  					<input id="_10" type="checkbox">
  						<div style="background-color:#eeeeee; padding:2px; color:#282828;">
							<div class="custom-search-content" style="height: 500px; overflow: scroll;">
								<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-2'); ?></br>
							</div>	
						</div>
				</div>
				<div style="border: 2px solid #323232; height:100%; margin-top:29px;">
					<?php echo GeoMashup::map('map_type=G_SATELLITE_MAP&height=100%&width=100%&zoom=5&marker_select_info_window=true&marker_select_center=false&map_content'); ?>
				</div>
			</div>
		</div>
	</body>
</html>


	<section id="primary" class="site-content">
		<div id="content" role="main">
		
<!-- WP Search Display Number of Search Results -->
<h2>Search Results: <?php 
/* Search Count */ 
$allsearch = &new WP_Query("s=$s&showposts=-1"); 
$key = wp_specialchars($s, 1); 
$count = $allsearch->post_count; _e(''); 
_e('<span class="search-terms">'); 
echo $key; _e('</span>'); _e(' — '); 
echo $count . ' '; _e('articles'); 

wp_reset_query(); ?></h2>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="custom-td-bg_1">
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
		</td>
		
	<tr>
		<td class="custom-child-preview-area-searchpage">
		</td>
	</tr>
</table>







</html>


	<section id="primary" class="site-content">
		<div id="content" role="main">
		
		
		

		
<div class="custom-child-call-area-searchpage" style="overflow-x:scroll;">
<table>
	<tr class="custom-td-bg_2">		
<!-- WP Search Results -->
		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<td style="padding:2px 2px 2px 2px; margin: 0px 0px 0px 0px; min-width:150px; max-width:150px; font-size:12px;">
				<?php echo GeoMashup::show_on_map_link('show_icon=true') ?>
				<a target="_blank" href="<?php the_permalink() ?>" rel="bookmark">
				<!-- Feature Image Thumbnail and Lightbox -->				
					<?php
 					$image = get_field('RAE_0248');
 					$url = $image['url'];
					$size_large = 'large';
					$size_small = 'thumbnail';
					$thumb = $image['sizes'][ $size_small ];
					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
 					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
 					?>
					<img style="border-radius: 5px;" src="<?php echo $thumb; ?>" alt="no image">
				</a>
				<a style="color:white;" target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></br><?php the_field('RAE_0003') ?></a>
			</td>
			<?php endwhile; ?>



		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
		<?php endif; ?>
	</tr>
</table>
</div>		
		

		
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>