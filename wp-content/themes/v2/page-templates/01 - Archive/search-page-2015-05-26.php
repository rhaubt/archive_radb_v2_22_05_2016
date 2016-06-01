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
#left { background-color: #191e23; }
#right { background-color: #191e23; }

@media screen and (min-width: 600px) {
   .push-wrapper {
      height: auto; overflow: hidden; // clearing 
   }
   #left { 
   		width: 400px; float: left; 
   	}
	#right { 
		margin-left: 405px;
		margin-right: 2px;
		width: auto;
	}
}
</style>

<html>
	<body>
		<div id="pushwrapper">
			<div style="height:55px; background-color: #191e23;">
			</div>
			<div id="left" style="max-height:684px; overflow: scroll; background-color: #e0e0e0; border: 2px solid #282828; box-shadow: 0 7px 6px -6px #777;;">
				<?php echo GeoMashup::full_post() ?>
			</div>
			<div id="right">
				<table style="width:100%;">
					<tr>
						<td style="height: 36px; background-color: #e0e0e0; border: 2px solid #282828; vertical-align: middle; padding: 0px 0px 0px 20px;">
							<h2>Search Results: all records</h2>
						</td>
					</tr>
					<tr>
						<td style="border: 2px solid #323232;">
							<?php echo GeoMashup::map('map_type=G_PHYSICAL_MAP&height=450&width=100%&zoom=2&marker_select_info_window=false&marker_select_center=false&map_content=global'); ?>
						</td>
					</tr>
					<tr>
						<td style="height: 190px; background-color: #eeeeee; border: 2px solid #282828;">
							
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>




	<section id="primary" class="site-content">
		<div id="content" role="main">
		
		
		

		
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>