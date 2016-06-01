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


.ac-container{
	width: 100%;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	text-align: left;
}
.ac-container label{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	font-style: normal;
	padding: 5px 20px;
	position: relative;
	z-index: 20;
	display: block;
	height: 30px;
	cursor: pointer;
	color: #e0e0e0;
	line-height: 33px;
	font-size: 18px;
	background: #282828;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 0px 0px 0px rgba(255,255,255,0.9) inset, 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover{
	background: #e0e0e0;
	color: #282828;
}
.ac-container input:checked + label,
.ac-container input:checked + label:hover{
	background: #282828;
	color: #e0e0e0;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after,
.ac-container input:checked + label:hover:after{
	content: '';
	position: absolute;
	width: 24px;
	height: 24px;
	right: 13px;
	top: 7px;
	background: transparent url(../plugin_geomashup-full-post/images/arrow_down.png) no-repeat center center;	
}
.ac-container input:checked + label:hover:after{
	background-image: url(../images/arrow_up.png);
}
.ac-container input{
	display: none;
}
.ac-container article{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	background: #e0e0e0;
	margin-top: -1px;
	overflow: hidden;
	height: 0px;
	position: relative;
	z-index: 10;
	-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p{
	color: #000000;
	line-height: 20px;
	font-size: 12px;
	padding: 10px 20px 10px 20px;
	text-align: justify;
}
.ac-container input:checked ~ article{
	-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small{
	height: 100%;
}
.ac-container input:checked ~ article.ac-medium{
	height: 100%;
}
.ac-container input:checked ~ article.ac-large{
	height: 100%;
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
</style>

<html>
	<body>
		<div id="pushwrapper">
			<div id="right">
				<div style="position: fixed; top: 0px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<h2>Rock Art Database</h2>
				</div>
<!-- (1) search -->
				<div style="position: fixed; top: 36px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #e0e0e0; border: 2px solid #282828; padding: 0px 0px 0px 0px;">
					<section class="ac-container">
						<div>
							<input id="ac-1" name="accordion-1" type="checkbox" />
								<label for="ac-1">Search &#128269;</label>
									<article class="ac-small">
										<div class="custom-search-content" style="height: 500px; overflow: scroll;">
											<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-1'); ?></br>
										</div>
									</article>
							
						</div>
					</section>
				</div>
				<div style="border: 2px solid #323232; height:100%; margin-top:72px;">
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