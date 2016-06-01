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
		height:calc(100vh - 130px);
	}
}
.gm-map {
	height:100%;
}
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
<!-- (1) Menu & Banner -->
				<div style="position: absolute; top:-75px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<label style="text-align:left; background-color:#282828; color:#e0e0e0;"><span style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Menu <span style="float:right; padding-right:70px; margin-top:-14px;"><img style="height: 50px;" src="http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/rockartdatabase_logo.png"></span></label>
				</div>
<!-- (2) Search -->
				<div style="position: absolute; top:-37px; z-index: 20; width: 100%; height: 36px; background-color: #191e23; color: #e0e0e0;">
					<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 10px 7px; color:#e0e0e0;" class="collapse" for="_10"><span style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Search &#128269 <span style="float:right; padding-right:5px;">&#9660</span></label>
  					<input id="_10" type="checkbox">
  						<div style="background-color:#eeeeee; padding:2px; color:#282828;">
							<div class="custom-search-content" style="height:500px; overflow:scroll; text-align:justify; line-height: 1.2; font-size:10px;">
								Use this Search to browse the Rock Art Database Collection catalogue. Please be reminded that the search will only ever be as good as the data provided by each entry. For specific searches it is recommended to take a top-down approach narrowing down your search using more general terms to more focused questions.</br></br>
								*all searches are additive using 'AND' in the query NOT 'OR' eg when ticking 'Africa' and 'Europe' the search will ONLY return entries that include both 'Africa' AND 'Europe'.</br></br>
								<ol style="line-height:18px;">
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_aqua.png"> UNESCO - UNESCO World Heritage Sites including rock-art</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_green.png"> Resources - Collection of rock-art related projects, databases, archives, research and records added by the admin team</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_maroon.png"> Wikipedia - Collection of Wikipedia entries containing rock-art information</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_gray.png"> Projects - Projects are rock-art projects by RADB members and may include records of Places, Sites and Items</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_fuchsia.png"> Places - Places are larger heritage areas eg Kakadu National Park (Places are typically contained within a Project and can contain Sites and Items)</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_lime.png"> Sites - Sites are specific locations within a Place eg a specific site within Kakadu National Park (Sites are typically contained within a Project and / or Place and can contain Items)</li>
								<li><img style="height:10px;" src="http://www.rockartdatabase.com/v2/wp-content/plugins/geo-mashup/images/mm_36_black.png"> Items - Items are tangible or intangible records of eg objects or motifs typically within a Site (Items are typically contained within a Project, Place and / or Site)</li>
								</ol></br>
								<hr>
								<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-2'); ?></br>
							</div>	
						</div>
				</div>
				<div style="border: 2px solid #323232;height:100%;margin-top:77px;">
					<?php echo GeoMashup::map('map_type=G_SATELLITE_MAP&height=100%&width=100%&zoom=2&marker_select_info_window=true&marker_select_center=true&map_content=global'); ?>
				</div>
			</div>
		</div>
	</body>
</html>

<div style="position:absolute; top:90px; right:20px; font-size:10px; color:white;">
	<?php echo GeoMashup::term_legend() ?>
</div>


	<section id="primary" class="site-content">
		<div id="content" role="main">
		
		
		

		
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>