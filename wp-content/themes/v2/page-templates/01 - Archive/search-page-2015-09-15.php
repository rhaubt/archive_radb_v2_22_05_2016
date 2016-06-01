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
								<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-1'); ?></br>
							</div>	
						</div>
				</div>
				<div style="border: 2px solid #323232; height:100%; margin-top:29px;">
					<?php echo GeoMashup::map('map_type=G_PHYSICAL_MAP&height=100%&width=100%&zoom=2&marker_select_info_window=true&marker_select_center=false&map_content=global'); ?>
				</div>
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