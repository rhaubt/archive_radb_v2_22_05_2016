<?php
/**
 * The template for displaying Search Results pages.
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


<!-- Floating Windows, Preview and Search -->
<div id="draggable">
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
		<td style="min-width:450px;">
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
					<td colspan="4" class="custom-map-area" style="height:450px;"><?php echo GeoMashup::map('map_type=G_PHYSICAL_MAP&height=450&width=100%&zoom=2&marker_select_info_window=false&marker_select_center=false'); ?>
					</td>
				</tr>
					<td colspan="2" class="custom-td-bg_2">

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
		</td>
	</tr>
</table>






</html>


<section id="primary" class="site-content">
	<div id="content" role="main">
		<div class="custom-child-call-area-searchpage" style="overflow-x:scroll;">
			<table>
				<tr class="custom-td-bg_2">	
					<td style="min-width:450px;">
					</td>
<!-- WP Search Results -->
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<td style="padding:2px 2px 2px 2px; margin: 0px 0px 0px 0px; min-width:150px; max-width:150px; font-size:12px;">
				<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  					the_post_thumbnail('thumbnail');
				}
				?>
				</a>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></br><?php the_field('RAE_0003') ?></a>
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