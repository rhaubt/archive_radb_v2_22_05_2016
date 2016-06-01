<?php
/**
 * Template Name: Search Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<html>
<head>
<style>
.entry-header {
	margin-bottom:0px;
}

.entry-header .entry-title {
	font-size: 12px !important;
}
.entry-header img.wp-post-image {
	width: 20%;
	height: 20%;
	margin-bottom: 0px;
}
.wp-post-image {
	padding: 0px 0px 0px 0px;
}
.page-header {
	padding-bottom: 0px;
	margin-bottom: 0px;
}
.site-content article {
	margin-top:0px;
	margin-bottom:0px;
	border-top: none;
	border-bottom: none;
	padding:0px 0px 0px 0px;
	margin: 0px 0px 0px 0px;
}
footer.entry-meta {
	display:none;
}
.comments-link {
	display:none;
}
.drawblogimage {
	width:0px;
	height:0px;
}
</style>
<head>

<!-- Floating Windows, Preview and Search -->
<div id="push-content">
<div>
<div class="FixedHeightContainer-left" class="Content-left">
	<div class="custom-preview-content"><?php echo GeoMashup::full_post() ?>
	</div>
</div>
</div>
<!-- Floating Windows, Preview and Search End -->

<!-- MAIN BODY -->
<table>
	<tr>
	
<!-- Left Full Post Window -->
		<td style="min-width:400px;">
		</td>

<!-- Right Window -->
		<td style="width:100%;">
			<table class="custom-table-style">

<!-- Logo -->
				<tr>
					<td class="custom-site-logo" style="height:44px;">
					</td>

<!-- TITLE -->
					<td class="custom-post-title">Search
					</td>
				</tr>


<!-- MAP Global Map -->
	<tr>
		<td colspan="3" class="custom-map-area"><?php echo GeoMashup::map('map_type=G_PHYSICAL_MAP&height=450&width=100%&zoom=2&marker_select_info_window=false&marker_select_center=false&map_content=global'); ?>
		</td>
	</tr>
		<td colspan="2" class="custom-td-bg_2">

<!-- WP Search Display Number of Search Results -->
<h2>Search Results: all records</h2>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="custom-td-bg_1">
			<header class="page-header">
				<h1 class="page-title"><img src="http://australianartmagazine.com/gochn/wp-content/plugins/geo-mashup/images/mm_20_aqua.png"> UNESCO = UNESCO sites, <img src="http://australianartmagazine.com/gochn/wp-content/plugins/geo-mashup/images/mm_20_silver.png"> Collection (1) Global = includes international records, <img src="http://australianartmagazine.com/gochn/wp-content/plugins/geo-mashup/images/mm_20_white.png"> Collection (2) Regional = Includes continent or country records, <img src="http://australianartmagazine.com/gochn/wp-content/plugins/geo-mashup/images/mm_20_teal.png"> Collection (3) Local = includes local records only, <img src="http://australianartmagazine.com/gochn/wp-content/plugins/geo-mashup/images/mm_20_red.png"> Place = includes site specific records</h1>
			</header>
		</td>
		
	<tr>
		<td class="custom-child-preview-area-searchpage">
		</td>
	</tr>
</table>
</div>
</html>


	<section id="primary" class="site-content">
		<div id="content" role="main">
		
		
		

		
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>